<?php

/**
 * The Setting Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin_Setting extends Controller {

    //SECTEUR D'ACTIVITE ET CATEGORIE
    public function action_setting() {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/setting';
            $view = View::forge('admin/index', $data);
            $view->set_global('categories', Model_Categorie::find("all"), false);
            $view->set_global('secteurs', Model_Secteur::getAll(), false);
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_getCategorie($id) {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/setting';
            $view = View::forge('admin/index', $data);
            $view->set_global('categorie', Model_Categorie::find($id));
            $view->set_global('categories', Model_Categorie::find("all"), false);
            $view->set_global('secteurs', Model_Secteur::getAll(), false);
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_delCategorie($id = 0) {
        DB::query("DELETE FROM categorie WHERE id=" . (int)$id)->execute();
        Response::redirect('admin/setting/setting');
    }

    public function action_savecategorie() {
        if (Session::get('isAdmin')) {
            if (Input::method() === 'POST') {
                if (!Input::post('id')) {
                    $cat = Model_Categorie::forge($_POST);
                    $cat->save();
                    Response::redirect('admin/setting/setting');
                } else {
                    $cat = Model_Categorie::find(Input::post('id'));
                    $cat->cat_secteur = Input::post('secteur');
                    $cat->save();
                    Response::redirect('admin/setting/setting');
                }
            }
        } else {
            Response::redirect('admin/admin/connection');
        }
    }

    public function action_getSecteur($id) {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/setting';
            $view = View::forge('admin/index', $data);
            $view->set_global('secteur', Model_Secteur::find($id));
            $view->set_global('categories', Model_Categorie::find("all"), false);
            $view->set_global('secteurs', Model_Secteur::getAll(), false);
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_delsecteur($id = 0) {
        DB::query("DELETE FROM secteur WHERE id=" . (int)$id)->execute();
        Response::redirect('setting/setting');
    }

    public function action_savesecteur() {
        if (Session::get('isAdmin')) {
            if (Input::method() === 'POST') {
                if (!Input::post('id')) {
                    $cat = Model_Secteur::forge($_POST);
                    $cat->save();
                    Response::redirect('setting/setting');
                } else {
                    $cat = Model_Secteur::find(Input::post('id'));
                    $cat->secteur = Input::post('secteur');
                    $cat->categorie_id = Input::post('categorie_id');
                    $cat->save();
                    Response::redirect('admin/setting/setting');
                }
            }
        } else
            Response::redirect('admin/admin/connection');
    }

    //FONCTIONS
    public function action_fonctions() {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/fonction';
            $view = View::forge('admin/index', $data);
            $view->set_global('fonctions', Model_Fonction::getAll());
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_getFonction($id) {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/fonction';
            $view = View::forge('admin/index', $data);
            $view->set_global('fonction', Model_Fonction::find($id));
            $view->set_global('fonctions', Model_Fonction::find('all'));
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_delFonction($id = 0) {
        DB::query("DELETE FROM fonction WHERE id=" . (int)$id)->execute();
        Response::redirect('admin/setting/fonctions');
    }

    public function action_saveFonction() {
        if (Input::method() === 'POST') {
            if (Session::get('isAdmin')) {
                if (!Input::post('id')) {
                    $cat = Model_Fonction::forge($_POST);
                    $cat->save();
                    Response::redirect('admin/setting/fonctions');
                } else {
                    $cat = Model_Fonction::find(Input::post('id'));
                    $cat->fonction = Input::post('fonction');
                    $cat->save();
                    Response::redirect('admin/setting/fonctions');
                }
            } else
                Response::redirect('admin/admin/connection');
        }
    }

//videos
    public function action_videos() {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/video';
            $view = View::forge('admin/index', $data);
            $view->set_global('videos', Model_Video::find('all'));
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_getVideo($id) {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/video';
            $view = View::forge('admin/index', $data);
            $view->set_global('video', Model_Video::find($id));
            $view->set_global('videos', Model_Video::find('all'));
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_delVideo($id = 0) {
        DB::query("DELETE FROM video WHERE id=" . (int)$id)->execute();
    }

    public function action_saveVideo() {
        if (Session::get('isAdmin')) {
            if (Input::method() === 'POST') {
                if (!Input::post('id')) {
                    $cat = Model_Video::forge($_POST);
                    $cat->save();
                    Response::redirect('admin/setting/videos');
                } else {
                    $cat = Model_Video::find(Input::post('id'));
                    $cat->video = Input::post('video');
                    $cat->titre = Input::post('titre');
                    $cat->save();
                    Response::redirect('admin/setting/videos');
                }
            }
        } else
            Response::redirect('admin/admin/connection');
    }

    //OFFRES D'EMPLOI
    public function action_offres() {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/offre';
            $view = View::forge('admin/index', $data);
            $view->set_global('offres', Model_Offre::getOffres(), false);
            $view->set_global('fonctions', Model_Fonction::getAll());
            $view->set_global('recruteurs', Model_Recruteur::getAll());
            $view->set_global('catsecteurs', Model_Categorie::find('all'), false);
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_delOffre($id) {
        DB::query("DELETE FROM offre WHERE id=" . (int)$id)->execute();
        Response::redirect('admin/setting/Offres');
    }

    public function action_saveOffre() {
        if (Session::get('isAdmin')) {
            if (Input::method() === 'POST') {
                if (!Input::post('id')) {
                    $val = \Fuel\Core\Validation::forge();
                    $val->add_field('titre', 'Titre Offre', 'required|trim');
                    $val->add_field('pays', 'Pays', 'required|trim');
                    $val->add_field('ville', 'Ville', 'required|trim');
                    $val->add_field('type_contrat', 'Type de contrat', 'required|trim');
                    $val->add_field('fonction_id', 'Fonctions', 'required|trim');
                    $val->add_field('description', 'Description', 'required|trim');
                    $val->add_field('spe_recherche', 'Spécialites recherchées', 'required|trim');
                    $val->add_field('date_debut', 'Date début', 'required|trim');
                    $val->add_field('date_fin', 'Date fin', 'required|trim');
                    if ($val->run()) {
                        if (FormatDate::timestamp(\Fuel\Core\Input::post('date_debut')) > FormatDate::timestamp(\Fuel\Core\Input::post('date_fin'))) {
                            echo 'La date de début de publication ne peux pas être supérieure à la date de fin de publication';
                            exit;
                        } else if (FormatDate::timestamp(\Fuel\Core\Input::post('date_debut')) == FormatDate::timestamp(\Fuel\Core\Input::post('date_fin'))) {
                            echo 'La date de début de publication ne peux pas être identique à la date de fin de publication';
                            exit;
                        } else if (FormatDate::timestamp(\Fuel\Core\Input::post('date_debut')) < FormatDate::timestamp()) {
                            echo 'La date de début de publication ne peux pas être inférieure à la date actuelle';
                            exit;
                        }
                        if (!isset($_POST['publier'])) {
                            echo 'Vous devez preciser si oui ou non vous voulez publier l\'offre directement sur le site de guinee-emploi';
                            exit;
                        }
                        $recruteur = new Model_Recruteur();
                        if (Input::post('new_recruteur')) {
                            $recruteur->nom = Input::post('new_recruteur');
                            $recruteur->date_enreg = time();
                            $recruteur->save();
                        }
                        $offre = Model_Offre::forge($_POST);
                        $offre->vues = 0;
                        $offre->actif = 1;
                        if (Input::post('new_recruteur'))
                            $offre->recruteur_id = $recruteur->id;
                        $offre->date_enreg = time();
                        $offre->save();
                        if (\Fuel\Core\Input::post('publier') == 1)
                            echo 'Votre offre a bien été sauvegardée et Publier sur le site de Guinee-emploi.';
                        else
                            echo 'Votre offre a bien été sauvegardée. Acceder à vos offres pour la publier';
                        //Response::redirect('admin/setting/offres');
                    } else {
                        echo current($val->errors());
                    }
                } else {
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

                        if (FormatDate::timestamp(\Fuel\Core\Input::post('date_debut')) > FormatDate::timestamp(\Fuel\Core\Input::post('date_fin'))) {
                            echo 'La date de début de publication ne peux pas être supérieure à la date de fin de publication';
                            exit;
                        } else if (FormatDate::timestamp(\Fuel\Core\Input::post('date_debut')) == FormatDate::timestamp(\Fuel\Core\Input::post('date_fin'))) {
                            echo 'La date de début de publication ne peux pas être identique à la date de fin de publication';
                            exit;
                        } else if (FormatDate::timestamp(\Fuel\Core\Input::post('date_debut')) < FormatDate::timestamp()) {
                            echo 'La date de début de publication ne peux pas être inférieure à la date actuelle';
                            exit;
                        }
                        if (!isset($_POST['publier'])) {
                            echo 'Vous devez preciser si oui ou non vous voulez publier l\'offre directement sur le site de guinee-emploi';
                            exit;
                        }
                        $offre = Model_Offre::find(Input::post('id'));

                        if (Input::post('new_recruteur')) {
                            $recruteur = new Model_Recruteur();
                            $recruteur->nom = Input::post('new_recruteur');
                            $recruteur->date_enreg = time();
                            $recruteur->save();
                            $offre->recruteur_id = $recruteur->id;
                        } else {
                            Input::post('recruteur_id');
                        }
                        $offre->pays = Input::post('pays');
                        $offre->ville = Input::post('ville');
                        $offre->type_contrat = Input::post('type_contrat');
                        $offre->titre = Input::post('titre');
                        $offre->fonction_id = Input::post('fonction_id');
                        $offre->description = Input::post('description');
                        $offre->date_debut = Input::post('date_debut');
                        $offre->date_fin = Input::post('date_fin');
                        $offre->secteur_id = Input::post('secteur_id');
                        $offre->publier = Input::post('publier');
                        $offre->offre_a_la_une = Input::post('offre_a_la_une');
                        $offre->save();
                        if (\Fuel\Core\Input::post('publier') == 1)
                            echo 'Votre offre a bien été sauvegardée et Publier sur le site de Guinee-emploi.';
                        else
                            echo 'Votre offre a bien été sauvegardée. Acceder à vos offres pour la publier';
                        //Response::redirect('admin/setting/offres');
                    } else {
                        echo current($val->errors());
                    }
                }
            } else {
                $data['content'] = 'admin/frmoffre';
                $view = View::forge('admin/index', $data);
                $view->set_global('recruteurs', Model_Recruteur::find('all'));
                $view->set_global('fonctions', Model_Fonction::find('all'));
                $view->set_global('catsecteurs', Model_Categorie::find('all'));
                return $view;
            }
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_getOffre($id) {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/frmoffre';
            $view = View::forge('admin/index', $data);
            $view->set_global('offre', Model_Offre::find($id));
            $view->set_global('recruteurs', Model_Recruteur::find('all'));
            $view->set_global('fonctions', Model_Fonction::find('all'));
            $view->set_global('catsecteurs', Model_Categorie::find('all'));
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    //LES RECRUTEURS
    public function action_recruteurs() {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/recruteur';
            $view = View::forge('admin/index', $data);
            $view->set_global('recruteurs', Model_Recruteur::getLast());
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_delRecruteur($id) {
        DB::query("DELETE FROM recruteur WHERE id=" . (int)$id)->execute();
        Response::redirect('admin/setting/recruteurs');
    }

    public function action_activeRecruteur($id, $true) {
        $a = ($true == 0) ? 1 : 0;
        DB::query("UPDATE recruteur SET actif=$a WHERE id=" . (int)$id)->execute();
        if ($a == 1) {
            $mail = Model_Recruteur::find($id)->email;
            $message = "Bonjour, <br/> <p>Ceci est un message de Guinee-emploi vous informant que votre compte recruteur a été activé</p> <p>Nous vous en souhaitons bon usage</p>";
            $email = Email::forge();
            $email->from('contact@guinee-emploi.com', 'GUINEE-EMPLOI');
            $email->to($mail);
            $email->bcc("dmn@guinee-webdev.com");
            $email->subject("GUINEE-EMPLOI - Compte actif");
            $email->html_body($message);
            $email->send();
        }
        Response::redirect('admin/setting/recruteurs');
    }

    public function action_message() {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/contact';
            $view = View::forge('admin/index', $data);
            $view->set_global('messages', Model_Contact::getMsg());
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_getMessage($id = 0) {
        $message = Model_Contact::find($id);
        $message->lu = 1;
        $message->save();
        print(\Fuel\Core\Format::forge($message)->to_json());
    }

    // ARTICLES ET CATEGORIES ARTICLE
    public function action_articles() {
        if (Session::get('isAdmin')) {
            if (Input::method() === 'POST' AND isset($_POST['category_id']))// alors il s'agit d'une recherche par filtre
                $articles = Model_Article::filtre(Input::post('publie'), Input::post('category_id'));
            else if (Input::method() === 'POST' AND Input::post('op') != "") {// il s'agit d'une opération à effectuer sur l'enregistrement                                                                
                if (isset($_POST['operation'])) {
                    foreach ($_POST['operation'] as $value) {
                        if (Input::post('op') == 1)
                            Func::publiearticle($value);
                        else if (Input::post('op') == 0)
                            Func::depublierarticle($value);
                        else if (Input::post('op') == -1)
                            Func::deletearticle($value);
                    }
                }
                $articles = Model_Article::getAll(20);
            } else
                $articles = Model_Article::getAll(20);

            $data['content'] = "admin/articles";
            $view = View::forge('admin/index', $data);
            $view->set($data, null, false);
            $view->set_global("articles", $articles, FALSE);
            $view->set_global("categories", Model_Category::find('all'), FALSE);
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_updateArticle($id) {
        if (Session::get('isAdmin')) {

            $data['content'] = "admin/add_article";
            $view = View::forge('admin/index', $data);
            $view->set($data, null, false);
            $view->set_global("categories", Model_Category::find('all'), FALSE);
            $view->set_global('article', Model_Article::find($id), FALSE);
            return $view;
        } else
            Fuel\Core\Response::redirect('admin/admin/connection');
    }

    public function action_saveArticle() {
        if (Session::get('isAdmin')) {
            $data['content'] = "admin/add_article";
            $view = View::forge('admin/index', $data);
            $view->set($data, null, false);
            $view->set_global("categories", Model_Category::find('all'), FALSE);
            if (Input::method() === 'POST') {
                if (!Input::post('id')) {
                    $article = Model_Article::forge($_POST);
                    $article->ajout = time();
                    $article->publie = isset($_POST['publie']) ? 1 : 0;
                    if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0) {
                        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $img = 'img' . time() . '.' . $ext;
                        move_uploaded_file($_FILES['image']['tmp_name'], DOCROOT . 'assets/upload/article/' . $img);
                        $article->image = $img;
                    }
                    $article->save();
                    Response::redirect('admin/setting/articles');
                } else {
                    $article = Model_Article::find(Input::post('id'));
                    $article->titre = Input::post('titre');
                    $article->category_id = Input::post('category_id');
                    $article->contenu = Input::post('contenu');
                    $article->publie = isset($_POST['publie']) ? 1 : 0;
                    if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0) {
                        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $img = 'img' . time() . '.' . $ext;
                        move_uploaded_file($_FILES['image']['tmp_name'], DOCROOT . 'assets/upload/article/' . $img);
                        $article->image = $img;
                    }
                    $article->save();
                    Response::redirect('admin/setting/articles');
                }
            } else {
                return $view;
            }
        } else
            Fuel\Core\Response::redirect('admin/admin/connection');
    }

    public function action_categories_actu() {
        if (Session::get('isAdmin')) {
            if (Input::method() === 'POST' AND Input::post('op') != "") {// il s'agit d'une opération à effectuer sur l'enregistrement                                                                
                if (isset($_POST['operation'])) {
                    foreach ($_POST['operation'] as $value) {
                        if (Input::post('op') == -1)
                            Func::deleteCategory($value);
                    }
                }
                $categorie = Model_Category::find('all');
            } else
                $categorie = Model_Category::find('all');

            $data['content'] = "admin/categorie_actu";
            $view = View::forge('admin/index', $data);
            $view->set($data, null, false);
            $view->set_global("categories", $categorie, FALSE);
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_updateCategorie_actu($id) {
        if (Session::get('isAdmin')) {
            $data['content'] = "admin/add_categorie_actu";
            $view = View::forge('admin/index', $data);
            $view->set($data, null, false);
            $view->set_global('categorie', Model_Category::find($id), FALSE);
            return $view;
        } else
            Fuel\Core\Response::redirect('admin/admin/connection');
    }

    public function action_saveCategorie_actu() {
        if (Session::get('isAdmin')) {

            $data['content'] = "admin/add_categorie_actu";
            $view = View::forge('admin/index', $data);
            $view->set($data, null, false);
            if (Input::method() === 'POST') {
                if (Input::post('id') === "0" or Input::post('id') === "") {
                    $section = Model_Category::forge($_POST);
                    $section->save();
                    Response::redirect('admin/setting/categories_actu');
                } else {
                    $section = Model_Category::find(Input::post('id'));
                    $section->categorie = Input::post('categorie');
                    $section->description = Input::post('description');
                    $section->save();
                    Response::redirect('admin/setting/categories_actu');
                }
            } else {
                return $view;
            }
        } else
            Fuel\Core\Response::redirect('admin/admin/connection');
    }

    //Rappel au candidat de mettre à jour leur profil
    public function action_sendMessage() {
        if (Session::get('isAdmin')) {
            if (Input::method() === 'POST') {
                $debut = Input::post('debut');
                $nbre = Input::post('nbre');

                $emails = DB::query("SELECT email FROM candidat LIMIT $debut,$nbre")->as_assoc()->execute();

                Package::load('email');
                $email = \Email\Email::forge();
                $email->from('contact@guinee-emploi.com');
                $email->to('dmn@guinee-webdev.com');
                $email->cc($emails);
                $email->subject(Input::post('sujet'));
                $email->html_body(Input::post('message'));
                $email->send();
            } else {
                $data['content'] = "admin/envoi_message";
                return View::forge('admin/index', $data);
            }

        } else
            Response::redirect('admin/admin/connection');
    }

}
