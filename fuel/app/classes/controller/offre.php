<?php

/**
 * The Ofrre Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Offre extends Controller_Template {

    var $offresL, $offresR;
    var $perpage = 10;

    public function before() {
        $this->offresL = Model_Offre::getOffresL();
        $this->offresR = Model_Offre::getOffresR();
        if (!Session::get('logged_recruteur') and !Session::get('logged_candidat') ) {
            if(\Fuel\Core\Uri::current()!=\Fuel\Core\Uri::create('front/connection')){
            $this->current=Uri::current();
            }
         }
    }

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index($categorie = null) {
        $this->auto_render = false;
        $data['class']='page_offres'; 
        if (Input::method() === 'POST') {
            $data['offres'] = Model_Offre::recherche(Input::post('motcles'), Input::post('ville'), $this->perpage);
            //print_r($data['offres']);
            $data['count'] = count($data['offres']['results']);
            $data['recruteurs'] = Model_Recruteur::getAll();
            $data['fonctions'] = Model_Fonction::getAll();
            $data['catsecteurs'] = Model_Categorie::find('all');
            $data['motcle'] = Input::post('motcles');
            $data['ville'] = Input::post('ville');
            $data['recherche']='"'.Input::post('motcles').'" dans la zone de '.Input::post('ville');
            $session = Session::instance();
            $session->set('sql', $data['offres']['query']);

            $tpl = View::forge('template');
            $tpl->contenu = View::forge('offre/dernieres_offres', $data, false);
            //$tpl->set_global('offres', $data['offres']['results']);
            $tpl->set_global('offres_right', $this->offresR);
            $tpl->set_global('offres_left', $this->offresL);
            $tpl->set_global('motcles', Input::post('motcles'));
            return $tpl;
        } elseif ($categorie != null) {
            $data['offres']['results'] = Model_Offre::getbySecteur($categorie);            
            $data['contenu'] = View::forge('offre/dernieres_offres');
            $view = View::forge('template', $data, false);
            $view->set_global('recruteurs', Model_Recruteur::getAll());
            $view->set_global('fonctions', Model_Fonction::getAll());
            $view->set_global('catsecteurs', Model_Categorie::find('all'));
            $view->set_global('categorie', $categorie);
            $view->set_global('count', count($data['offres']['results']));
            $view->set_global('offres_right', $this->offresR);
            $view->set_global('offres_left', $this->offresL);
            return $view;
        } else {
            $data['offres']['results'] = Model_Offre::find()->order_by('id', 'desc')->limit($this->perpage)->get();
            $data['contenu'] = View::forge('offre/dernieres_offres');
            $session = Session::instance();
            $session->set('sql', 'SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,
                   date_debut,type_contrat,offre.id,offre.ville,
                   offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
                   FROM offre,secteur,fonction,recruteur
                   WHERE offre.id=recruteur.id');
            $view = View::forge('template', $data);
            $view->set_global('offres', $data['offres']);
            $view->set_global('recruteurs', Model_Recruteur::getAll());
            $view->set_global('fonctions', Model_Fonction::getAll());
            $view->set_global('catsecteurs', Model_Categorie::find('all'));
            $view->set_global('count', count($data['offres']['results']));
            $view->set_global('offres_right', $this->offresR);
            $view->set_global('offres_left', $this->offresL);
            return $view;
        }
    }
   
    public function action_detail($id) {
        $this->auto_render = false;
        $offre = Model_Offre::find()->where('id', $id)->get_one();
        if (!$offre->titre) {
            Response::redirect('/');
        }
        $offre->vues = $offre->vues + 1;
        $offre->save();
        $titre=$offre->titre.' '.$offre->ville.' '.$offre->pays;
        /*if (Session::get('logged_candidat')) {
            $postuler = Model_Candidat::checkPostuler(Session::get('id'), $id);
            if ($postuler > 0) {
                $session = Session::instance();
                $session->set('postuler', 'Vous avez déja postulé(e) à cette offre');
            }else
                Session::delete('postuler');
        }*/
        $data['recruteur'] = Model_Recruteur::find()->where('id', $offre->id)->get_one();
        if (isset($data['recruteur']))
            $data['secteur'] = Model_Secteur::find()->where('id', $data['recruteur']->secteur_id)->get_one();
        $fonction= Model_Fonction::find()->where('id', $offre->fonction_id)->get_one();
        $data['contenu'] =View::forge('offre/detail_offre');
        $expire= time() - strtotime($offre->date_fin);
        $view = View::forge('template', $data);
        $view->set_global('fonction', $fonction);
        $view->set_global('offres_right', $this->offresR);
        $view->set_global('offres_left', $this->offresL);
        $view->set_global('offre', $offre);   
        $view->set_global('expire', $expire);             
        return $view;
       /* if (file_exists(DOCROOT . 'offre_emploi/' . $id . '/' . Inflector::friendly_title($titre) . '.html'))
          \Fuel\Core\File::delete(DOCROOT . 'offre_emploi/' . $id . '/' . Inflector::friendly_title($titre) . '.html');
          \Fuel\Core\File::create(DOCROOT . 'offre_emploi/', $id . '/' . Inflector::friendly_title($titre) . '.html', $view);
          \Fuel\Core\Response::redirect('offre_emploi/' . $id . '/' . Inflector::friendly_title($titre) . '.html'); 
    */}

    public function action_filtreResultats() {
        $this->auto_render = false;
        if (Input::method() === 'POST') {
            if (isset($_POST['function']) AND $_POST['function'] != 0)
                $data['offres']['results'] = Model_Offre::filtre(Input::post('fonction_id'), NULL, NULL, NULL, NULL, Session::get('sql'));
            else if (isset($_POST['recruteur']) AND $_POST['recruteur'] != 0)
                $data['offres']['results'] = Model_Offre::filtre(NULL, NULL, NULL, Input::post('recruteur'), NULL, Session::get('sql'));
            else if (isset($_POST['type_contrat']))
                $data['offres']['results'] = Model_Offre::filtre(NULL, Input::post('type_contrat'), NULL, NULL, NULL, Session::get('sql'));
            else if (isset($_POST['date']) AND $_POST['date'] != 0) {
                switch (Input::post('date')) {
                    case 1 :$dateSql = "='" . date('Y-m-d', time()) . "'";
                        break;
                    case 2 :$dateSql = ">='" . date('Y-m-d', time() - 7 * 24 * 3600) . "'";
                        break;
                    case 3 :$dateSql = ">='" . date('Y-m-d', time() - 14 * 24 * 3600) . "'";
                        break;
                    case 4 :$dateSql = ">= '" . date('Y-m-d', time() - 21 * 24 * 3600) . "'";
                        break;
                }
                $data['offres']['results'] = Model_Offre::filtre(NULL, NULL, NULL, NULL, $dateSql, Session::get('sql'));
            } else if (isset($_POST['secteur']) AND $_POST['secteur'] != 0)
                $data['offres']['results'] = Model_Offre::filtre(NULL, NULL, Input::post('secteur'), NULL, NULL, Session::get('sql'));

            $format = new Format();
            echo($format->to_json($data['offres']['results']));
        }
    }

    /**
     * The 404 action for the application.
     *
     * @access  public
     * @return  Response
     */
    public function action_404() {
        return Response::forge(View::forge('welcome/404'), 404);
    }

    public function action_recruteur($id = null) {
        $this->auto_render = false;
        $recruteur = Model_Recruteur::find($id);
        $this->offresR = Model_Offre::find()->order_by('vues', 'desc')->limit(5)->get();
        $data['offres'] = $recruteur->getOffres();
        $data['catsecteurs'] = Model_Categorie::find('all');
        $data['fonctions'] = Model_Fonction::getAll();
        $data['recruteur'] = $recruteur;
        $data['count'] = count($data['offres']);

        $tpl = View::forge('template');
        $tpl->contenu = View::forge('offre/offre_recruteur', $data, false);
        $tpl->set_global('offres_right', $this->offresR);
        return $tpl;
    }
   /* public function action_offresEntreprise($id = null) {
        $this->auto_render = false;
        $recruteur = Model_Recruteur::find($id);
        $this->offresR = Model_Offre::find()->order_by('vues', 'desc')->limit(5)->get();
        $data['offres'] = $recruteur->getOffresEntreprise();
        $data['catsecteurs'] = Model_Categorie::find('all');
        $data['fonctions'] = Model_Fonction::getAll();
        $data['recruteur'] = $recruteur;
        $data['count'] = count($data['offres']);

        $tpl = View::forge('template');
        $tpl->contenu = View::forge('offre/offre_recruteur', $data, false);
        $tpl->set_global('offres_right', $this->offresR);
        return $tpl;
    }*/

    public function action_filtre() {
        $this->auto_render = false;
        switch ($_POST['date']) {
            case 0 :$dateSql = "";
                break;
            case 1 :$dateSql = ">='" . date('Y-m-d', time() - 7 * 24 * 3600) . "'";
                break;
            case 2 :$dateSql = ">='" . date('Y-m-d', time() - 14 * 24 * 3600) . "'";
                break;
            case 3 :$dateSql = ">= '" . date('Y-m-d', time() - 21 * 24 * 3600) . "'";
                break;
            case 4 :$dateSql = ">= '" . date('Y-m-d', time() - 28 * 24 * 3600) . "'";
                break;
        }
        $offres = Model_Offre::filtre($_POST['fonction_id'], $_POST['type_contrat'], $_POST['secteur_id'], $_POST['recruteur_id'], $dateSql, $_POST['ville'], $this->perpage);
        /* $format = new Format();
          echo($format->to_json($offres)); */
        print(Format::forge($offres)->to_json());
    }

    public function action_nextOffre() {
        $this->auto_render = false;
        if (isset($_POST['id'])) {
            $offres = Model_Offre::getNextOffres($_POST['id'], $this->perpage);
            $format = new Format();
            echo($format->to_json($offres));
        }
    }

    public function action_nextFiltre($id = 0) {
        $this->auto_render = false;
        switch ($_POST['date']) {
            case 0 :$dateSql = "";
                break;
            case 1 :$dateSql = ">='" . date('Y-m-d', time() - 7 * 24 * 3600) . "'";
                break;
            case 2 :$dateSql = ">='" . date('Y-m-d', time() - 14 * 24 * 3600) . "'";
                break;
            case 3 :$dateSql = ">= '" . date('Y-m-d', time() - 21 * 24 * 3600) . "'";
                break;
            case 4 :$dateSql = ">= '" . date('Y-m-d', time() - 28 * 24 * 3600) . "'";
                break;
        }
        $offres = Model_Offre::getNextFiltre($_POST['fonction_id'], $_POST['type_contrat'], $_POST['secteur_id'], $_POST['recruteur_id'], $dateSql, $_POST['ville'], $id, $this->perpage);
        $format = new Format();
        echo($format->to_json($offres));
    }

    public function action_nextCategorie($id = 0) {
        $this->auto_render = false;
        if (isset($_POST['categorie_id']) AND $id != 0) {
            $offres = Model_Offre::getnextbySecteur($_POST['categorie_id'], $id, $this->perpage);
            $format = new Format();
            echo($format->to_json($offres));
        }
    }

    public function action_nextMotcle($id = 0) {
        $this->auto_render = false;
        if (isset($_POST['categorie_id']) AND $id != 0) {
            $offres = Model_Offre::nextrecherche($_POST['motcle'], $_POST['ville'], $id, $this->perpage);
            $format = new Format();
            echo($format->to_json($offres));
        }
    }

    public function action_candidats($id = null) {
        $this->auto_render = false;
        if (Session::get('logged_recruteur')) {
            $candidats = Model_Offre::getCandidats($id, $this->perpage);
            $data['canditats'] = $candidats;
            $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));

            $tpl = View::forge('template');
            $tpl->contenu = View::forge('offre/candidat', $data, FALSE);

            $tpl->set_global('canditats', $candidats);
            $tpl->set_global('recruteur', Model_Recruteur::checkUser(Session::get('id')));

            $tpl->set_global('offres_right', $this->offresR);
            $tpl->set_global('offres_left', $this->offresL);
            $tpl->set_global('offre', Model_Offre::find($id)); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            return $tpl;
        }
        else
            Response::redirect('front/loginRecruteur');
    }

    public function action_filtreCandidat($id = 0) {// dans l'espace recruteur, les candidats postulants
        $this->auto_render = false;
        $cvs = Model_Offre::filtreCandidat($_POST['competence'], $_POST['ville'], $_POST['tranche_age'], $_POST['statut'], $_POST['niveau_formation'], $_POST['langue'], $id, $this->perpage);
        foreach ($cvs as $cv) {
            echo '<tr class="tout '.(Model_Candidat::isSaved($cv->id, $id) ? 'selected' : '').'" '.(Model_Candidat::isSaved($cv->id, $id) ? 'style="background-color:#ccc;"' : '').' id="'. $cv->ajout .'" title="'. $cv->id .'">
                        <td>
                            <button type="button" class="btn btn-xs '.(Model_Candidat::isSaved($cv->id, $id) ? 'active' : '').'" title="Selectionner|Retirer '. stripslashes($cv->nom . ' ' . $cv->prenom) .'"><i class="icon-ok"></i></button>
                        </td>
                        <td style="width: 110px;">
                            <a target="_blank" href="'. Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) .'">
                                <img style="width: 100px;" src="'. Uri::base(false) . 'assets/upload/photo/' . $cv->photo .'" />
                            </a>
                        </td>
                        <td>
                            <h5>
                                <a  style="text-transform: uppercase; color: green; font-weight: normal; font-size: 15px;" target="_blank" href="'. Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) .'">
                                    '. stripslashes($cv->nom . ' ' . $cv->prenom) .'
                                </a>
                            </h5>
                            <p> '. $cv->niveau_formation .' | '. $cv->tranche_age .' | '. $cv->premiere_langue . '-' . $cv->deuxieme_langue .' | '. stripslashes($cv->ville) .' </p>
                            '. Str::truncate(stripslashes(nl2br($cv->experience)), 150) .'
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium ad cupiditate dolorum eligendi fuga perspiciatis ratione recusandae voluptas. Animi aperiam ex explicabo impedit in ipsam magnam mollitia similique voluptates.</p>
                        </td>
                    </tr>';
        }

    }

    public function action_nextFiltreCandidat($id, $ajout = 0) {// dans l'espace recruteur, les candidats postulants
        $this->auto_render = false;
        $cvs = Model_Offre::nextFiltreCandidat($_POST['competence'], $_POST['ville'], $_POST['tranche_age'], $_POST['statut'], $_POST['niveau_formation'], $_POST['langue'], $ajout, $id, $this->perpage);
        foreach ($cvs as $cv) {
            echo '<tr class="tout '.(Model_Candidat::isSaved($cv->id, $id) ? 'selected' : '').'" id="'. $cv->ajout .'" title="'. $cv->id .'">
                        <td>
                            <button type="button" class="btn btn-xs '.(Model_Candidat::isSaved($cv->id, $id) ? 'active' : '').'" title="Selectionner|Retirer '. stripslashes($cv->nom . ' ' . $cv->prenom) .'"><i class="icon-ok"></i></button>
                        </td>
                        <td style="width: 110px;">
                            <a target="_blank" href="'. Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) .'">
                                <img style="width: 100px;" src="'. Uri::base(false) . 'assets/upload/photo/' . $cv->photo .'" />
                            </a>
                        </td>
                        <td>
                            <h5>
                                <a  style="text-transform: uppercase; color: green; font-weight: normal; font-size: 15px;" target="_blank" href="'. Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) .'">
                                    '. stripslashes($cv->nom . ' ' . $cv->prenom) .'
                                </a>
                            </h5>
                            <p> '. $cv->niveau_formation .' | '. $cv->tranche_age .' | '. $cv->premiere_langue . '-' . $cv->deuxieme_langue .' | '. stripslashes($cv->ville) .' </p>
                            '. Str::truncate(stripslashes(nl2br($cv->experience)), 150) .'
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium ad cupiditate dolorum eligendi fuga perspiciatis ratione recusandae voluptas. Animi aperiam ex explicabo impedit in ipsam magnam mollitia similique voluptates.</p>
                        </td>
                    </tr>';
        }
    }

    public function action_nextCandidat($id, $ajout = 0) {// dans l'espace recruteur, les candidats postulants
        $this->auto_render = false;
        $cvs = Model_Offre::nextCandidat($id, $ajout, $this->perpage);
        foreach ($cvs as $cv) {
            echo '<tr class="tout '.(Model_Candidat::isSaved($cv->id, $id) ? 'selected' : '').'" id="'. $cv->ajout .'" title="'. $cv->id .'">
                        <td>
                            <button type="button" class="btn btn-xs '.(Model_Candidat::isSaved($cv->id, $id) ? 'active' : '').'" title="Selectionner|Retirer '. stripslashes($cv->nom . ' ' . $cv->prenom) .'"><i class="icon-ok"></i></button>
                        </td>
                        <td style="width: 110px;">
                            <a target="_blank" href="'. Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) .'">
                                <img style="width: 100px;" src="'. Uri::base(false) . 'assets/upload/photo/' . $cv->photo .'" />
                            </a>
                        </td>
                        <td>
                            <h5>
                                <a  style="text-transform: uppercase; color: green; font-weight: normal; font-size: 15px;" target="_blank" href="'. Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) .'">
                                    '. stripslashes($cv->nom . ' ' . $cv->prenom) .'
                                </a>
                            </h5>
                            <p> '. $cv->niveau_formation .' | '. $cv->tranche_age .' | '. $cv->premiere_langue . '-' . $cv->deuxieme_langue .' | '. stripslashes($cv->ville) .' </p>
                            '. Str::truncate(stripslashes(nl2br($cv->experience)), 150) .'
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium ad cupiditate dolorum eligendi fuga perspiciatis ratione recusandae voluptas. Animi aperiam ex explicabo impedit in ipsam magnam mollitia similique voluptates.</p>
                        </td>
                    </tr>';
        }
    }

    public function action_listCandidat($id) {// dans l'espace recruteur, les candidats postulants
        $this->auto_render = false;
        $cvs = Model_Offre::listCandidat($id);
        foreach ($cvs as $cv) {
            echo '<tr class="tout '.(Model_Candidat::isSaved($cv->id, $id) ? 'selected' : '').'" id="'. $cv->ajout .'" title="'. $cv->id .'">
                        <td>
                            <button type="button" class="btn btn-xs '.(Model_Candidat::isSaved($cv->id, $id) ? 'active' : '').'" title="Selectionner|Retirer '. stripslashes($cv->nom . ' ' . $cv->prenom) .'"><i class="icon-ok"></i></button>
                        </td>
                        <td style="width: 110px;">
                            <a target="_blank" href="'. Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) .'">
                                <img style="width: 100px;" src="'. Uri::base(false) . 'assets/upload/photo/' . $cv->photo .'" />
                            </a>
                        </td>
                        <td>
                            <h5>
                                <a  style="text-transform: uppercase; color: green; font-weight: normal; font-size: 15px;" target="_blank" href="'. Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) .'">
                                    '. stripslashes($cv->nom . ' ' . $cv->prenom) .'
                                </a>
                            </h5>
                            <p> '. $cv->niveau_formation .' | '. $cv->tranche_age .' | '. $cv->premiere_langue . '-' . $cv->deuxieme_langue .' | '. stripslashes($cv->ville) .' </p>
                            '. Str::truncate(stripslashes(nl2br($cv->experience)), 150) .'
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium ad cupiditate dolorum eligendi fuga perspiciatis ratione recusandae voluptas. Animi aperiam ex explicabo impedit in ipsam magnam mollitia similique voluptates.</p>
                        </td>
                    </tr>';
        }
    }

}