<?php

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Recruteur extends Controller {

    var $offresL, $offresR;
    var $perpage = 10;

    public function before() {
        Helper::isConnected();
        $this->offresL = Model_Offre::getOffresL();
        $this->offresR = Model_Offre::getOffresR();
    }

    public function action_index() {
        if (Session::get('logged_recruteur')) {
            $data['recruteur'] = Model_Recruteur::find(Session::get('id'));
            $template = View::forge('template');
            $template->contenu = View::forge('recruteur/recruteur');
            $template->set_global('offres_right', $this->offresR);
            $template->set_global('offres_left', $this->offresL);
            $template->set_global('recruteur', Model_Recruteur::find(Session::get('id')));
            return $template;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_profilRecruteur() {
        if (Session::get('logged_recruteur')) {
            $offre = new Model_Offre(); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));
            // $data['secteurs'] = Model_Secteur::find('all');
            $data['secteurs'] = Model_Categorie::find('all');
            $template = View::forge('template', $data);
            $template->contenu = View::forge('recruteur/profil_recruteur', $data);
            $template->set_global('offres_right', $this->offresR);
            $template->set_global('offres_left', $this->offresL);
            $template->set_global('offre', $offre); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            $template->set_global('recruteur', Model_Recruteur::checkUser(Session::get('id')));
            return $template;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_messagesRecruteur($start = 0, $nb = 4) {
        if (Session::get('logged_recruteur')) {
            $offre = new Model_Offre(); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            $total = Model_MessageRecruteur::getMessagesAll(Session::get('id'));
            $config = array(
                'pagination_url' => Uri::create('recruteur/messagesRecruteur/' . Session::get('id')),
                'total_items' => $total,
                'per_page' => 4,
                'uri_segment' => 4,
                'template' => array(
                    'wrapper_start' => '<div class="pagination"> ',
                    'wrapper_end' => ' </div>',
                    'previous_start' => '<span > ',
                    'previous_end' => '</span>',
                    'previous_mark' => '« ',
                    'page_start' => '<span > ',
                    'page_end' => ' </span>',
                    'next_start' => '<span > ',
                    'next_end' => ' </span>',
                    'next_mark' => ' »',
                    'active_start' => '<span class="svt" >',
                    'active_end' => ' </span>',
                ),
            );

            // Config::set('pagination', $config); // you can use this too!
            Pagination::set_config($config);
            $pagination = Pagination::create_links();
            $messages = Model_MessageRecruteur::getMessages(Session::get('id'), Pagination::$offset, Pagination::$per_page);
            $tpl = Fuel\Core\View::forge('template');
            $tpl->contenu = View::forge('recruteur/messagesRecruteur');
            $tpl->set_global('recruteur', Model_Recruteur::find(Session::get('id')));
            $tpl->set_global('messages', $messages);
            $tpl->set_global('offres_right', $this->offresR);
            $tpl->set_global('offres_left', $this->offresL);
            $tpl->set_global('pagination', $pagination);
            $tpl->set_global('offre', $offre); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            return $tpl;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_detailM($id = NULL) {
        if (Session::get('logged_recruteur')) {
            $offre = new Model_Offre(); // Pour eviter que offre n'existe pas dans inc/space et inc/espace

            $tpl = View::forge('template');
            $tpl->contenu = View::forge('recruteur/detailmsg');

            $tpl->set_global('lemessage', Model_MessageRecruteur::find($id));
            $tpl->set_global('recruteur', Model_Recruteur::find(Session::get('id')));

            $tpl->set_global('offres_right', $this->offresR);
            $tpl->set_global('offres_left', $this->offresL);
            $tpl->set_global('offre', $offre); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            return $tpl;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_deleteOffre() {
        if (Session::get('logged_recruteur')) {
            $rs = Model_Recruteur::deleteOffre(Input::post('id'), Session::get('id'));
            echo $rs;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_enregistrer() {
        $data['catsecteurs'] = Model_Categorie::find('all');

        $template = View::forge('template');
        $template->contenu = View::forge('recruteur/enregistrerRecruteur', $data);
        $template->set_global('offres_right', $this->offresR);
        $template->set_global('offres_left', $this->offresL);
        return $template;
    }

    public function action_mesOffres() {
        $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));
        if (Session::get('logged_recruteur') and $data['recruteur']->actif == 1) {
            $offre = new Model_Offre(); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            $tpl = View::forge('template');
            $tpl->contenu = View::forge('recruteur/mesOffres');

            $tpl->set_global('recruteur', Model_Recruteur::find(Session::get('id')));
            $tpl->set_global('fonctions', Model_Fonction::find('all'));
            $tpl->set_global('offres_right', $this->offresR);
            $tpl->set_global('offres_left', $this->offresL);
            $tpl->set_global('offre', $offre); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            return $tpl;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_entreprise() {
        $recruteurs = Model_Recruteur::find()->order_by('id', 'desc')->limit(5)->get();
        $tpl = View::forge('template');
        $tpl->contenu = View::forge('recruteur/liste_recruteur');
        $tpl->set_global('recruteurs', $recruteurs);
        $tpl->set_global('entreprises', Model_Recruteur::find('all'));
        $tpl->set_global('count', count($recruteurs));
        $tpl->set_global('catsecteurs', Model_Categorie::find('all'));
        $tpl->set_global('offres_right', $this->offresR);
        $tpl->set_global('offres_left', $this->offresL);
        return $tpl;
    }

    public function action_add() {
        if (Input::method() === 'POST') {
            if (Input::post('id') === "0" or Input::post('id') === "") {
                $val = Validation::forge();
                $val->add_callable('Complex');
                $val->add_field('email', 'Email', 'required|trim|valid_email');
                $val->add_field('nom', 'Nom', 'required|trim');
                $val->add_field('adresse', 'Adresse', 'required|trim');
                $val->add_field('phone', 'Téléphone', 'required|trim');
                $val->add_field('secteur_id', 'Secteur d\'activité', 'required|trim');
                $val->add_field('pwd', 'Mot de passe', 'required|match_field[cpwd]|complexe');
                $val->add('condition', 'Conditions d\'utilisation');

                if ($val->run() and isset($_POST['condition'])) {
                    if (Model_Recruteur::checkmail(Input::post('email'))) {
                        $data['error'] = "Cet utilisateur existe d&eacute;j&agrave; !";
                        $data['catsecteurs'] = Model_Categorie::find('all');
                        $view = View::forge('recruteur/enregistrerRecruteur', $data);
                        $view->set_global('offres_right', $this->offresR);
                        $view->set_global('offres_left', $this->offresL);
                        return $view;
                    } else {
                        $propeties = array('date_enreg' => time(), 'email' => Input::post('email'), 'nom' => (Input::post('nom')), 'pays' => '', 'adresse' => Input::post('adresse'),
                            'ville' => '', 'phone' => Input::post('phone'), 'site_web' => '', 'description' => '', 'nom_contact' => '', 'statut' => '',
                            'prenom_contact' => '', 'logo' => 'no-logo.jpg', 'pwd' => sha1(Input::post('pwd')), 'etat_civil' => '',
                            'phone_contact' => '', 'fonction_contact' => '', 'id' => '', 'secteur_id' => Input::post('secteur_id'), 'actif' => 0
                        );
                        $recruteur = new Model_Recruteur($propeties);
                        $recruteur->save();
                        $session = Session::instance();
                        $recruteur = Model_Recruteur::connect(Input::post('email'), Input::post('pwd'));
                        $session->set('id', $recruteur->id);
                        $session->set('logged_recruteur', true);
                        $session->set('logo', $recruteur->logo);
                        $session->set('nom', $recruteur->nom);
                        $session->set('emailR', $recruteur->email);
                        $session->set('valid', false);

                        Session::set_flash('inscription_success', true);
                        Response::redirect('recruteur/confirmation_inscription/' . $recruteur->id);
                        /* $data['inscription_success'] = true;
                          $data['secteurs'] = Model_Secteur::find('all');
                          $data['catsecteurs'] = Model_Categorie::find('all');
                          $view = View::forge('recruteur/enregistrerRecruteur', $data);
                          $view->set_global('offres_right', $this->offresR);
                          $view->set_global('offres_left', $this->offresL);
                          return $view; */
                    }
                } else {
                    if (!isset($_POST['condition'])) {
                        Session::set_flash('condition', 'Vous devez accepter les conditions d\'utilisation du site Guinée Emploi.');
                    }

                    $data['error'] = current($val->errors());
                    $data['post'] = $_POST;
                    $data['recruteur'] = Model_Recruteur::find(Session::get('id'));
                    $data['secteurs'] = Model_Secteur::find('all');
                    $data['catsecteurs'] = Model_Categorie::find('all');

                    $template = View::forge('template');
                    $template->contenu = View::forge('recruteur/enregistrerRecruteur', $data);
                    $template->set_global('offres_right', $this->offresR);
                    $template->set_global('offres_left', $this->offresL);
                    return $template;
                }
            } else {
                $val = Validation::forge();
                $val->add_field('nom', 'Nom', 'required|trim');
                $val->add_field('pays', 'Pays', 'required|trim');
                $val->add_field('ville', 'Ville', 'required|trim');
                $val->add_field('statut', 'Statut', 'required');
                if ($val->run()) {
                    $recruteur = Model_Recruteur::find(Input::post('id'));
                    $recruteur->nom = Input::post('nom');
                    $recruteur->date_enreg = Input::post('date_enreg');
                    $recruteur->secteur_id = Input::post('secteur_id');
                    $recruteur->adresse = Input::post('adresse');
                    $recruteur->pays = Input::post('pays');
                    $recruteur->ville = Input::post('ville');
                    $recruteur->phone_contact = Input::post('phone_contact');
                    if (filter_var(Input::post('site_web'), FILTER_VALIDATE_URL)) {
                        $recruteur->site_web = Input::post('site_web');
                    } else {
                        $recruteur->site_web = '';
                    }
                    $recruteur->description = Input::post('description');
                    $recruteur->prenom_contact = Input::post('prenom_contact');
                    $recruteur->phone = Input::post('phone');
                    $recruteur->statut = Input::post('statut');
                    $recruteur->nom_contact = Input::post('nom_contact');
                    $recruteur->logo = Input::post('logo');
                    $recruteur->pwd = Input::post('pwd');
                    $recruteur->etat_civil = Input::post('etat_civil');
                    $recruteur->fonction_contact = Input::post('fonction_contact');
                    $recruteur->save();
                    Response::redirect('recruteur');
                } else {
                    $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));
                    $data['errors'] = $val->errors();
                    $data['secteurs'] = Model_Secteur::find('all');
                    $data['catsecteurs'] = Model_Categorie::find('all');

                    //Chargement du template
                    $template = View::forge('template');
                    $template->contenu = View::forge('recruteur/profil_recruteur', $data);
                    $template->set_global('offres_right', $this->offresR);
                    $template->set_global('offres_left', $this->offresL);
                    return $template;
                }
            }
        }
    }

    public function action_confirmation_inscription($recruteur_id = '') {
        if (!Session::get_flash('inscription_success')) {
            Response::redirect('front/index');
        }

        $recruteur = Model_Recruteur::find($recruteur_id);
        if ($recruteur == null) {
            Response::redirect('front/index');
        }

        if ($recruteur->actif == 1) {
            Response::redirect('front/index');
        }

        $tpl = View::forge('template');
        $tpl->contenu = View::forge('recruteur/confirmation_inscription');
        $tpl->set_global('recruteur', $recruteur);
        $tpl->set_global('offres_right', $this->offresR);
        return $tpl;
    }

    public function action_publierOffre($id = 0) {
        if (Session::get('logged_recruteur')) {
            if ($id === 0)
                $offre = new Model_Offre();
            else
                $offre = Model_Offre::find($id);

            $tpl = View::forge('template');
            $tpl->contenu = View::forge('recruteur/publier_offre');

            $tpl->set_global('recruteur', Model_Recruteur::checkUser(Session::get('id')));
            $tpl->set_global('fonctions', Model_Fonction::find('all'));

            $tpl->set_global('offres_right', $this->offresR);
            $tpl->set_global('offres_left', $this->offresL);
            $tpl->set_global('offre', $offre);
            $tpl->set_global('catsecteurs', Model_Categorie::find('all'));

            return $tpl;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_publication($id) {
        if (Session::get('logged_recruteur')) {

            $offre = Model_Offre::find($id);
            if ($offre->publier == 0) {
                $offre->date_debut = date("Y-m-d");
                $offre->publier = 1;
                echo '1';
            } elseif ($offre->publier == 2) {
                $offre->publier = 1;
                echo '1';
            } else {
                $offre->publier = 2;
                echo '2';
            }
            $offre->save();
            // echo 'Votre offre a été publier avec succes sur le site de Guinée Emploi';
        } else
            Response::redirect('front/loginRecruteur');
    }

    /* public function action_depublication($id) {
         if (Session::get('logged_recruteur')) {

             $offre = Model_Offre::find($id);
             $offre->publier = 0;
             $offre->save();
             echo 'Votre offre a été depublier avec succes sur le site de Guinée Emploi et elle ne sera plus visible pour les visiteurs';
         } else
             Response::redirect('front/loginRecruteur');
     }*/

    public function action_desactiver($id) {
        if (Session::get('logged_recruteur')) {
            $offre = Model_Offre::find($id);
            $offre->actif = 0;
            $offre->save();
            echo 'Votre offre a été supprimer avec succes du site de Guinée Emploi';
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_supprimerOffre($id_offre) {
        $id_recruteur = Session::get('id');
        $resultat = DB::query("DELETE FROM offre WHERE recruteur_id = $id_recruteur AND id = $id_offre")->execute();

        if (1 == 1) {
            echo 'yes';
        } else {
            echo 'no';
        }
    }

    public function action_saveOffre() {
        $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));

        if (Session::get('logged_recruteur') and $data['recruteur']->actif == 1) {

            $val = Validation::forge();
            $val->add_field('titre', 'Titre Offre', 'required|trim');
            $val->add_field('pays', 'Pays', 'required|trim');
            $val->add_field('ville', 'Ville', 'required|trim');
            $val->add_field('type_contrat', 'Type de contrat', 'required|trim');
            $val->add_field('fonction_id', 'Fonctions', 'required|trim');
            $val->add_field('experience', 'Expérience', 'required|trim');
            $val->add_field('spe_recherche', 'Spécialites recherchées', 'required|trim');
            $val->add_field('date_debut', 'Date début', 'required|trim');
            $val->add_field('date_fin', 'Date fin', 'required|trim');

            if ($val->run()) {
                if (FormatDate::timestamp(Input::post('date_debut')) > FormatDate::timestamp(Input::post('date_fin'))) {
                    exit;
                } else if (FormatDate::timestamp(Input::post('date_debut')) == FormatDate::timestamp(Input::post('date_fin'))) {
                    exit;
                } 
/*else if (FormatDate::timestamp(Input::post('date_debut')) < FormatDate::timestamp()) {
                    exit;
                }*/
                if (!isset($_POST['publier'])) {
                    exit;
                }

                if (Input::post('id') === "0" or Input::post('id') === "") {
                    $offre = Model_Offre::forge($_POST);
                    $offre->fichier = 'nofile.jpg';
                    $offre->vues = 0;
                    $offre->actif = 1;
                    $offre->date_enreg = time();
                    $offre->recruteur_id = $data['recruteur']->id;
                    // Debut file  Upload process
                    if (isset($_FILES['file1']) AND $_FILES['file1']['error'] == 0) {
                        $ext = pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION);
                        $img = 'fichier' . time() . '.' . $ext;
                        move_uploaded_file($_FILES['file1']['tmp_name'], DOCROOT . 'assets/upload/' . $img);
                        $offre->fichier = $img;
                        $offre->save();
                    } else {
                        $offre->save();
                    }
                    $last = Model_Offre::find('last');
                    $mot = explode(',', $last->spe_recherche);
                    $mails = Model_Candidat::getMail($mot);
                    $alert = new Model_Alertjob();
                    foreach ($mails as $m) {
                        $alert->idAlert = $last->id;
                        $alert->titre = $last->titre;
                        $alert->email = $m->email;
                        $alert->save();
                    }

                    $mail = array();
                    foreach ($mails as $m) {
                        $mail = $m->email;
                    }
                    Package::load('email');
                    $email = Email::forge();
                    $email->from('contact@guinee-emploi.com');
                    $email->to($mail);
                    $email->subject('Alert job:' . $last->titre);
                    $email->html_body(Str::truncate($last->description, 50) . '<br/> Pour plus d\'info<a href="' . Uri::create('/offre/detail/') . $last->id . '"');

                    /* try
                      {
                      $email->send();
                      echo utf8_decode('Votre offre a bien ete sauvegardee. L\'Envoi de l\' alertjob à &eacute;t&eacute; &eacute;ffectu&eacute; avec succ&egrave;s');
                      }
                      catch (\EmailValidationFailedException $e)
                      {
                      echo utf8_decode('Votre offre a bien ete sauvegardee. Cependant l\'envoi de l\' alertjob a &eacute;chou&eacute;');
                      }
                      catch (\EmailSendingFailedException $e)
                      {
                      echo utf8_decode('Votre offre a bien ete sauvegardee. Cependant l\'envoi de l\' alertjob a &eacute;chou&eacute;');
                      } */
                } else {
                    $offre = Model_Offre::find(Input::post('id'));
                    $offre->pays = Input::post('pays');
                    $offre->date_enreg = Input::post('date_enreg');
                    $offre->ville = Input::post('ville');
                    $offre->type_contrat = Input::post('type_contrat');
                    $offre->titre = Input::post('titre');
                    $offre->fonction_id = Input::post('fonction_id');
                    $offre->experience = Input::post('experience');
                    $offre->description = Input::post('description');
                    $offre->spe_recherche = Input::post('spe_recherche');
                    $offre->date_debut = Input::post('date_debut');
                    $offre->date_fin = Input::post('date_fin');
                    $offre->secteur_id = Input::post('secteur_id');
                    $offre->publier = Input::post('publier');
                    // Debut file  Upload process
                    if (isset($_FILES['file1']) AND $_FILES['file1']['error'] == 0) {
                        $ext = pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION);
                        $img = 'fichier' . time() . '.' . $ext;
                        move_uploaded_file($_FILES['file1']['tmp_name'], DOCROOT . 'assets/upload/' . $img);
                        $offre->fichier = $img;
                        $offre->save();
                    } else {
                        $offre->fichier = Input::post('fichier');
                        $offre->save();
                    }
                }
            }

        }
        Response::redirect('recruteur/mesOffres');
    }

    public function action_addOffre() {
        $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));
        if (Session::get('logged_recruteur') and $data['recruteur']->actif == 1) {
            if (Input::is_ajax()) {
                $val = Validation::forge();
                $val->add_field('titre', 'Titre Offre', 'required|trim');
                $val->add_field('pays', 'Pays', 'required|trim');
                $val->add_field('ville', 'Ville', 'required|trim');
                $val->add_field('type_contrat', 'Type de contrat', 'required|trim');
                $val->add_field('fonction_id', 'Fonctions', 'required|trim');
                $val->add_field('experience', 'Expérience', 'required|trim');
                $val->add_field('spe_recherche', 'Spécialites recherchées', 'required|trim');
                $val->add_field('date_debut', 'Date début', 'required|trim');
                $val->add_field('date_fin', 'Date fin', 'required|trim');
                if ($val->run()) {

                    if (FormatDate::timestamp(Input::post('date_debut')) > FormatDate::timestamp(Input::post('date_fin'))) {
                        echo 'La date de début de publication ne peux pas être supérieure à la date de fin de publication';
                        exit;
                    } else if (FormatDate::timestamp(Input::post('date_debut')) == FormatDate::timestamp(Input::post('date_fin'))) {
                        echo 'La date de début de publication ne peux pas être identique à la date de fin de publication';
                        exit;
                    } else if (FormatDate::timestamp(Input::post('date_debut')) < FormatDate::timestamp()) {
                        echo 'La date de début de publication ne peux pas être inférieure à la date actuelle';
                        exit;
                    }
                    if (!isset($_POST['publier'])) {
                        echo 'Vous devez preciser si oui ou non vous voulez publier l\'offre directement sur le site de guinee-emploi';
                        exit;
                    }
                    echo 'ok';
                } else
                    echo current($val->errors());
            }
        } else {
            exit;
        }
    }

    public function action_editPwd() {
        if (Session::get('logged_recruteur')) {
            if (Input::method() === 'POST') {
                $val = Validation::forge();
                $val->add_field('pwd', 'Mot de passe', 'required|trim|match_field[cpwd]');
                if ($val->run()) {
                    $recruteur = Model_Recruteur::checkUser(Session::get('id'));
                    $recruteur->pwd = sha1(Input::post('pwd'));
                    $recruteur->save();
                    Response::redirect('Recruteur');
                } else {
                    $data['errors'] = $val->errors();
                    $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));
                    $tpl = View::forge('template');
                    $tpl->contenu = View::forge('recruteur/modifier_pwd', $data);
                    $tpl->set_global('recruteur', Model_Recruteur::checkUser(Session::get('id')));
                    $tpl->set_global('offres_right', $this->offresR);
                    $tpl->set_global('offres_left', $this->offresL);
                    return $tpl;
                }
            }
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_UpdatePwd() {
        if (Session::get('logged_recruteur')) {
            $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));
            $tpl = View::forge('template');
            $tpl->contenu = View::forge('recruteur/modifier_pwd', $data);
            $tpl->set_global('recruteur', Model_Recruteur::checkUser(Session::get('id')));
            $tpl->set_global('offres_right', $this->offresR);
            $tpl->set_global('offres_left', $this->offresL);
            return $tpl;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_monLogo() {
        if (Session::get('logged_recruteur')) {
            $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));
            $data['secteur'] = Model_Secteur::find($data['recruteur']->secteur_id)->secteur;
            $tpl = View::forge('template');

            $tpl->contenu = View::forge('recruteur/modifier_logo');
            $tpl->set_global('data', $data);
            $tpl->set_global('recruteur', Model_Recruteur::checkUser(Session::get('id')));
            $tpl->set_global('secteur', Model_Secteur::find($data['recruteur']->secteur_id)->secteur);
            $tpl->set_global('offres_right', $this->offresR);
            $tpl->set_global('offres_left', $this->offresL);
            return $tpl;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_UpdateLogo() {
        if (Session::get('logged_recruteur')) {
            if (isset($_FILES['logo']) AND $_FILES['logo']['error'] == 0) {
                $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
                $img = 'logo' . time() . '.' . $ext;
                move_uploaded_file($_FILES['logo']['tmp_name'], DOCROOT . 'assets/upload/logo/' . $img);
                $recruteur = Model_Recruteur::checkUser(Session::get('id'));
                unlink(DOCROOT . 'assets/upload/' . $recruteur->logo);
                $recruteur->logo = $img;
                $recruteur->save();
                $session = Session::instance();
                $session->set('logo', $recruteur->logo);
                Response::redirect('recruteur');
            } else {
                $data['errors'] = "Image non enregistrée";
                $data['recruteur'] = Model_Recruteur::checkUser(Session::get('id'));
                $data['secteur'] = Model_Secteur::find($data['recruteur']->secteur_id)->secteur;
                $tpl = View::forge('template');
                $tpl->contenu = View::forge('recruteur/modifier_logo', $data);
                $tpl->set_global('secteur', Model_Secteur::find($data['recruteur']->secteur_id)->secteur);
                $tpl->set_global('recruteur', Model_Recruteur::checkUser(Session::get('id')));
                $tpl->set_global('offres_right', $this->offresR);
                $tpl->set_global('offres_left', $this->offresL);
                return $tpl;
            }
        } else
            Response::redirect('front/loginRecruteur');
    }

    /**
     * The 404 action for the application.
     *
     * @access  public
     * @return  Response
     */
    public function action_404() {
        return Response::forge(View::forge('404'), 404);
    }

    public function action_getRecruteur() {
        $recruteur = Model_Recruteur::find($_POST['id']);
        $format = new Format();
        echo($format->to_json($recruteur));
    }

    public function action_detail($id = null) {
        $this->auto_render = false;
        $offre = new Model_Offre();
        $recruteur = Model_Recruteur::find($id);
        if (!$recruteur->nom) {
            Response::redirect('/');
        }

        $tpl = View::forge('template');
        $tpl->contenu = View::forge('recruteur/detail');

        $tpl->set_global('recruteur', $recruteur, false);
        $tpl->set_global('offres_right', $this->offresR);
        $tpl->set_global('offre', $offre); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
        return $tpl;
        /* if (file_exists(DOCROOT . 'recruteurs/' . $id . '_' . Inflector::friendly_title($recruteur->nom) . '.html'))
          File::delete(DOCROOT . 'recruteurs/' . $id . '_' . Inflector::friendly_title($recruteur->nom) . '.html');
          File::create(DOCROOT . 'recruteurs/', $id . '_' . Inflector::friendly_title($recruteur->nom) . '.html', $view);
          Response::redirect('recruteurs/' . $id . '_' . Inflector::friendly_title($recruteur->nom) . '.html'); */
    }

    public function action_nextOffres() {
        $this->auto_render = false;
        $recruteur = Model_Recruteur::checkUser(Session::get('id'));
        if (isset($_POST['id'])) {
            $offres = $recruteur->getNextOffres($_POST['id'], $this->perpage);
            $format = new Format();
            echo($format->to_json($offres));
        }
    }

    public function action_nextFiltreOffre($id = 0) {
        $this->auto_render = false;
        switch ($_POST['date']) {
            case 0 :
                $dateSql = "";
                break;
            case 1 :
                $dateSql = ">='" . date('Y-m-d', time() - 7 * 24 * 3600) . "'";
                break;
            case 2 :
                $dateSql = ">='" . date('Y-m-d', time() - 14 * 24 * 3600) . "'";
                break;
            case 3 :
                $dateSql = ">= '" . date('Y-m-d', time() - 21 * 24 * 3600) . "'";
                break;
            case 4 :
                $dateSql = ">= '" . date('Y-m-d', time() - 28 * 24 * 3600) . "'";
                break;
        }
        $recruteur = Model_Recruteur::checkUser(Session::get('id'));
        $offres = $recruteur->getNextFiltre($_POST['fonction_id'], $_POST['type_contrat'], $dateSql, $_POST['ville'], $id, $this->perpage);
        $format = new Format();
        echo($format->to_json($offres));
    }

    public function action_filtreOffre($id = 0) {
        $this->auto_render = false;
        switch ($_POST['date']) {
            case 0 :
                $dateSql = "";
                break;
            case 1 :
                $dateSql = ">='" . date('Y-m-d', time() - 7 * 24 * 3600) . "'";
                break;
            case 2 :
                $dateSql = ">='" . date('Y-m-d', time() - 14 * 24 * 3600) . "'";
                break;
            case 3 :
                $dateSql = ">= '" . date('Y-m-d', time() - 21 * 24 * 3600) . "'";
                break;
            case 4 :
                $dateSql = ">= '" . date('Y-m-d', time() - 28 * 24 * 3600) . "'";
                break;
        }
        $recruteur = Model_Recruteur::checkUser(Session::get('id'));
        $offres = $recruteur->filtreOffre($_POST['fonction_id'], $_POST['type_contrat'], $dateSql, $_POST['ville'], $this->perpage);
        $format = new Format();
        echo($format->to_json($offres));
    }

    public function action_filtreEntreprise() {
        $recru = new Model_Recruteur();
        $recruteurs = $recru->filtreEntreprise($_POST['recruteur_id'], $_POST['secteur_id'], $_POST['ville'], $this->perpage);
        $format = new Format();
        echo($format->to_json($recruteurs));
    }

    public function action_nextEntreprise($n = 5) {
        $this->auto_render = false;
        if (isset($_POST['id'])) {
            $recruteurs = Model_Recruteur::getNextEntreprise($_POST['id'], $n);
            $format = new Format();
            echo($format->to_json($recruteurs));
        }
    }

    public function action_sendMsgBash() {
        $id = $_POST['canditats'];
        $recruteur = Model_Recruteur::find(Session::get('id'));
        $email = Email::forge();
        $email->from($recruteur->email, $recruteur->nom);
        $email->subject("Guinee-emploi- message recruteur");
        foreach ($id as $value) {
            $candidat = Model_Candidat::find(($value));
            $msg = Model_MessageCandidat::forge();
            $msg->sujet = $_POST['sujet'];
            $msg->message = $_POST['message'];
            $msg->candidat_id = $candidat->id;
            $msg->recruteur_id = Session::get('id');
            $msg->ajout = date('Y-m-d H:i:s');
            $msg->lu = 0;
            $msg->save();

            $email->to($candidat->email, $candidat->nom);
            $email->html_body('Bonjour <br/> <p>Vous avez reçu un message d\'un recruteur dans votre compte <a href="http://guinee-emploi.com">Guinee-Emploi/a>.</p>');
            try {
                $email->send();
                echo '1';
            } catch (\EmailValidationFailedException $e) {
                $msg->delete();
                echo '0';
            } catch (Email\EmailSendingFailedException $e) {
                $msg->delete();
                echo '0';
            }
        }
    }

    public function action_removeMessage($id) {
        if (Session::get('logged_recruteur')) {
            Model_MessageRecruteur::remove($id, Session::get('id'));
            Fuel\Core\Response::redirect('recruteur/messagesRecruteur');
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_sendMsg() {
        $candidat = Model_Candidat::find(($_POST['canditats']));
        $recruteur = Model_Recruteur::find(Session::get('id'));

        $msg = Model_MessageCandidat::forge();
        $msg->sujet = $_POST['sujet'];
        $msg->message = $_POST['message'];
        $msg->candidat_id = $candidat->id;
        $msg->recruteur_id = Session::get('id');
        $msg->ajout = time();
        $msg->lu = 0;
        $msg->save();

        $email = Email::forge();
        $email->from($recruteur->email, $recruteur->nom);
        $email->to($candidat->email, $candidat->nom);
        $email->subject("Guinee-emploi- message recruteur");
        $email->html_body('Bonjour <br/> <p>Vous avez reçu un message d\'un recruteur dans votre compte <a href="http://guinee-emploi.com">Guinee-Emploi/a>.</p>');
        try {
            $email->send();
            return 'L\'Envoi de la newsletter a &eacute;t&eacute; &eacute;ffectu&eacute; avec succ&egrave;s';
        } catch (\EmailValidationFailedException $e) {
            return 'Echec de la validation des emails';
        } catch (Email\EmailSendingFailedException $e) {
            return 'L\'envoi de la newsletter a &eacute;chou&eacute;';
        }

        //echo "1";
    }

    public function action_envoyer_message() {
        $candidat = Model_Candidat::find(($_POST['candidat_id']));
        $recruteur = Model_Recruteur::find(Session::get('id'));
        /* Cette page doit etre traitée en ajax. Donc si l'utilisateur essaye d'accéder à cette
          page sans ajax on termine le scrit avec la fonction exit() de php */
        if (!Input::is_ajax()) {
            exit();
        } else {
            //On charge la bibliothèthe de validation des formulaires
            $val = Validation::forge();
            $val->add_field('sujet', 'Sujet', 'required');
            $val->add_field('message', 'Message', 'required');
            if ($val->run()) {
                $message = new Model_MessageCandidat();
                $message->sujet = $_POST['sujet'];
                $message->message = $_POST['message'];
                $message->candidat_id = $candidat->id;
                $message->recruteur_id = Session::get('id');
                $message->ajout = date("Y-m-d H:i:s");
                $message->lu = 0;
                if ($message->save()) {
                    echo 'succes';
                    $email = Email::forge();
                    $email->from($recruteur->email, $recruteur->nom);
                    $email->to($candidat->email, $candidat->nom);
                    $email->subject("Guinee-emploi- message recruteur");
                    $email->html_body('Bonjour <br/> <p>Vous avez reçu un message d\'un recruteur dans votre compte <a href="http://guinee-emploi.com">Guinee-Emploi/a>.</p>');
                    try {
                        $email->send();
                        // return 'L\'Envoi de la newsletter a &eacute;t&eacute; &eacute;ffectu&eacute; avec succ&egrave;s';
                    } catch (\EmailValidationFailedException $e) {
                        //return 'Echec de la validation des emails';
                    } catch (Email\EmailSendingFailedException $e) {
                        // return 'L\'envoi de la newsletter a &eacute;chou&eacute;';
                    }
                } else {
                    echo 'erreur';
                }
            } else {
                echo current($val->errors());
            }
        }
    }

    public function action_saveCandidats() {
        $id = $_POST['canditats'];
        $offre = $_POST['offreId'];
        foreach ($id as $value) {
            DB::query("DELETE FROM savecandidat WHERE candidat_id=$value AND offre_id=$offre")->execute();
            DB::query("INSERT INTO savecandidat(offre_id,candidat_id,recruteur_id) VALUES($offre,$value," . Session::get('id') . ")")->execute();
        }
    }

    public function action_unsaveCandidats() {
        $id = $_POST['canditats'];
        $offre = $_POST['offreId'];
        foreach ($id as $value) {
            DB::query("DELETE FROM savecandidat WHERE candidat_id='$value' AND offre_id=$offre AND recruteur_id=" . Session::get('id'))->execute();
        }
    }

    public function action_saveCandidat() {
        $id = $_POST['canditats'];
        DB::query("DELETE FROM savecandidat WHERE candidat_id=$id AND offre_id=1 AND recruteur_id=" . Session::get('id'))->execute();
        DB::query("INSERT INTO savecandidat VALUES(1,$id," . Session::get('id') . ")")->execute();
    }

    public function action_unsaveCandidat() {
        $id = $_POST['canditats'];
        DB::query("DELETE FROM savecandidat WHERE candidat_id=$id AND offre_id=1 AND recruteur_id=" . Session::get('id'))->execute();
    }

}
