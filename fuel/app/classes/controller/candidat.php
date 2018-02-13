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
class Controller_Candidat extends Controller {

    var $offresL, $offresR;
    var $perpage = 10;

    public function before() {
        Helper::isConnected();
        $this->offresL = Model_Offre::getOffresL();
        $this->offresR = Model_Offre::getOffresR();
    }

    public function action_index() {
        if (Session::get('logged_candidat')) {
            $candidat = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
            $data['contenu'] = View::forge('candidat/candidat');
            $view = View::forge('template', $data);
            $view->set_global('candidat', $candidat);
            $view->set_global('offres_right', $this->offresR);
            $view->set_global('offres_left', $this->offresL);

            return $view;
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_profilCandidat() {
        if (Session::get('logged_candidat')) {
            $candidat = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
            $data['contenu'] = View::forge('candidat/profil_candidat');
            $view = View::forge('template', $data);
            $view->set_global('candidat', $candidat);
            $view->set_global('offres_right', $this->offresR);
            $view->set_global('offres_left', $this->offresL);
            return $view;
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_alertjob() {
        if (Session::get('logged_candidat')) {
            $candidat = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
            if ($candidat->alert == 1) {
                $mgs = 'vous êtes deja abonnés aux Alertjob';
                echo $mgs;
            } else {
                $mgs = 'vous devez vous abonner aux Alertjob';
                DB::query('UPDATE candidat SET alert=1 WHERE id=' . Session::get('id'))->execute();
            }
        } else {
            $mgs = 'vous devez vous connecté d\'abord';
            echo $mgs;
        }
    }

    public function action_creerAlert() {
        if (Session::get('logged_candidat')) {
            if (Input::method() === 'POST') {
                $val = Validation::forge();
                $val->add_field('titre', 'Nom de l\'alerte', 'required|trim');
                if ($val->run()) {
                    $sql = Model_Alertjob::createAlert(Input::post('pays'), Input::post('ville'), Input::post('fonction'), Input::post('motcles'), Input::post('type_contrat'), Input::post('secteur'), Input::post('experience'), Input::post('id'), Session::get('email'));
                    $propeties = array('titre' => Input::post('titre'), 'alertsql' => $sql, 'email' => Session::get('email'));
                    $alert = new Model_Alertjob($propeties);
                    $alert->save();
                    Response::redirect('candidat/mesAlertes');
                } else {
                    $data['recruteurs'] = Model_Recruteur::find('all');
                    $data['fonctions'] = Model_Fonction::find('all');
                    $data['candidat'] = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
                    $data['errors'] = $val->errors();
                    $view = View::forge('candidat/alert', $data);
                    $view->set_global('offres_right', $this->offresR);
                    $view->set_global('offres_left', $this->offresL);
                    return $view;
                }
            }
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_deleteAlerte() {
        if (Session::get('logged_candidat')) {
            DB::query("DELETE FROM alertjob WHERE idAlert=" . (int) Input::post('id'))->execute();
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_editPwd() {
        if (Session::get('logged_candidat')) {
            if (Input::method() === 'POST') {
                $val = Validation::forge();
                $val->add_field('pwd', 'Mot de passe', 'required|trim|match_field[cpwd]');
                if ($val->run()) {
                    $candidat = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
                    $candidat->pwd = sha1(Input::post('pwd'));
                    $candidat->save();
                    Response::redirect('candidat');
                } else {
                    $errors = $val->errors();
                    $candidat = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
                    $template = View::forge('template');
                    $template->contenu = View::forge('candidat/modifier_pwd');
                    $template->set_global('candidat', $candidat);
                    $template->set_global('errors', $errors);
                    $template->set_global('offres_right', $this->offresR);
                    $template->set_global('offres_left', $this->offresL);
                    return $template;
                }
            }
        } else
            Response::redirect('front/login');
    }

    public function action_UpdatePwd() {
        if (Session::get('logged_candidat')) {
            $candidat = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
            $template = View::forge('template');
            $template->contenu = View::forge('candidat/modifier_pwd');
            $template->set_global('candidat', $candidat);
            $template->set_global('offres_right', $this->offresR);
            $template->set_global('offres_left', $this->offresL);
            return $template;
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_forgetPwd() {
        $template = View::forge('template');
        $template->contenu = View::forge('candidat/password_oublie');
        $template->set_global('offres_right', $this->offresR);
        $template->set_global('offres_left', $this->offresL);
        return $template;
    }

    public function action_GenerePassword() {
        $password = '';
        // Initialisation des caractères utilisables
        $characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l",
            "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
        for ($i = 0; $i < 20; $i++) {
            $password .= ($i % 2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
        }

        return $password;
    }

    public function action_sendPwd() {
        $mail = NULL;
        $val = Validation::forge();
        $val->add_field('mail', 'Adresse mail', 'required|trim|valid_email');
        $val->add_field('prof', 'Profil', 'required|trim');
        if ($val->run()) {
            $motdepasse = $this->action_GenerePassword();
            $pwd = sha1($motdepasse);
            $mail='';
            if (Input::post('prof') == 'candidat') {
                $mail = Model_Candidat::resetPWD(Input::post('mail'), $pwd);
            } else {
                $mail = Model_Recruteur::resetPWD(Input::post('mail'), $pwd);
            }
            if ($mail != NULL) {
                $email = Email::forge();
                $email->from('contact@guinee-emploi.com');
                $email->subject('Votre nouveau mot de passe');
                $email->to($mail);
                $email->html_body("Bonjour, voici votre nouveau mot de passe; utiliser le pour vous connecter et vous pourez le modifier quand vous serez connecté<br>Mot de passe :$motdepasse");
                try {
                    $email->send();
                    $data['message'] = "un nouveau mot de passe a été envoyé à votre mail : $mail";
                    $template = View::forge('template');
                    $template->contenu = View::forge('candidat/password_oublie',$data);
                    $template->set_global('offres_right', $this->offresR);
                    $template->set_global('offres_left', $this->offresL);
                    return $template;
                } catch (\EmailValidationFailedException $e) {
                    $data['message'] = 'Cette adresse mail est invalide';
                    $template = View::forge('template');
                    $template->contenu = View::forge('candidat/password_oublie',$data);
                    $template->set_global('offres_right', $this->offresR);
                    $template->set_global('offres_left', $this->offresL);
                    return $template;
                } catch (\EmailSendingFailedException $e) {
                    $data['message'] = 'Echec de l\'envoi du mot de passe';
                    $template = View::forge('template');
                    $template->contenu = View::forge('candidat/password_oublie',$data);
                    $template->set_global('offres_right', $this->offresR);
                    $template->set_global('offres_left', $this->offresL);
                    return $template;
                }
                $template = View::forge('template');
                $template->contenu = View::forge('candidat/password_oublie');
                $template->set_global('offres_right', $this->offresR);
                $template->set_global('offres_left', $this->offresL);
                return $template;
            } else {
                $ml = $_POST['mail'];
                $data['message'] = "$ml est introuvable dans notre système";
                $template = View::forge('template');
                $template->contenu = View::forge('candidat/password_oublie',$data);
                $template->set_global('offres_right', $this->offresR);
                $template->set_global('offres_left', $this->offresL);
                return $template;
            }
        } else {
            $ml = Input::post('mail');
            $data['errors'] = $val->errors();
            $template = View::forge('template');
            $template->contenu = View::forge('candidat/password_oublie',$data);
            $template->set_global('offres_right', $this->offresR);
            $template->set_global('offres_left', $this->offresL);
            return $template;
        }
    }

    public function action_maPhoto() {
        if (Session::get('logged_candidat')) {
            $candidat = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
            $template = View::forge('template');
            $template->contenu = View::forge('candidat/modifier_photo');
            $template->set_global('candidat', $candidat);
            $template->set_global('offres_right', $this->offresR);
            $template->set_global('offres_left', $this->offresL);
            return $template;
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_UpdatePhoto() {
        if (Session::get('logged_candidat')) {
            if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0) {
                $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                $extention_permises = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG');
                if (in_array($ext, $extention_permises)) {
                    if ($_FILES['photo']['size'] <= 2000000) {
                        $img = 'photo' . time() . '.' . $ext;
                        move_uploaded_file($_FILES['photo']['tmp_name'], DOCROOT . 'assets/upload/photo/' . $img);
                        $candidat = Model_Candidat::find(Session::get('id'));
                        if ($candidat->photo != 'no-profile.jpg')
                            unlink(DOCROOT . 'assets/upload/photo/' . $candidat->photo);
                        $candidat->photo = $img;
                        $candidat->save();
                        $session = Session::instance();
                        $session->set('photo', $candidat->photo);
                        Response::redirect('candidat');
                    } else {
                        $errors = 'Verifier  que la taille de votre  fichier est bien inférieur ou égale à 2 Mega octet (2Mo) Obligatoirement';
                        $candidat = Model_Candidat::find(Session::get('id'));
                        $template = View::forge('template');
                        $template->contenu = View::forge('candidat/modifier_photo');
                        $template->set_global('candidat', $candidat);
                        $template->set_global('errors', $errors);
                        $template->set_global('offres_right', $this->offresR);
                        $template->set_global('offres_left', $this->offresL);
                        return $template;
                    }
                } else {
                    $errors = "Verifier  que votre fichier est bien du type('jpg', 'jpeg', 'gif', 'png') Obligatoirement";
                    $candidat = Model_Candidat::find(Session::get('id'));
                    $template = View::forge('template');
                    $template->contenu = View::forge('candidat/modifier_photo');
                    $template->set_global('candidat', $candidat);
                    $template->set_global('errors', $errors);
                    $template->set_global('offres_right', $this->offresR);
                    $template->set_global('offres_left', $this->offresL);
                    return $template;
                }
            } else {
                $errors = 'Verifier  que la taille de votre  fichier est bien inférieur ou égale à 2 Mega octet (2Mo) Obligatoirement';
                $candidat = Model_Candidat::find(Session::get('id'));
                $template = View::forge('template');
                $template->contenu = View::forge('candidat/modifier_photo');
                $template->set_global('candidat', $candidat);
                $template->set_global('errors', $errors);
                $template->set_global('offres_right', $this->offresR);
                $template->set_global('offres_left', $this->offresL);
                return $template;
            }
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_mesAlertes() {
        if (Session::get('logged_candidat')) {
            $data['candidat'] = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
            $data['alertes'] = Model_Alertjob::find()->where('email', Session::get('email'))->get();
            $template = View::forge('template');
            $template->contenu = View::forge('candidat/mesalertes', $data);
            $template->set_global('offres_right', $this->offresR);
            $template->set_global('offres_left', $this->offresL);
            return $template;
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_enregistrer() {
        $data['contenu'] = View::forge('candidat/EnregistrerCandidat');
        $view = View::forge('template', $data);
        $view->set_global('offres_right', $this->offresR);
        $view->set_global('offres_left', $this->offresL);
        return $view;
    }

    public function action_candidatures() {
        if (Session::get('logged_candidat')) {
            $candidat = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
            $data['contenu'] = View::forge('candidat/candidatures');
            $view = View::forge('template', $data);
            $view->set_global('candidat', $candidat);
            $view->set_global('offres_right', $this->offresR);
            $view->set_global('offres_left', $this->offresL);
            return $view;
        } else
            Response::redirect('front/loginCandidat');
    }

    /* public function action_complexe($pwd)
      {
      If((strlen($pwd)>=8) && (preg_match("#[A-Z]#", $pwd))&& (preg_match("#[a-z]#", $pwd))&& (preg_match("#[0-9]#", $pwd)))
      return  true;

      } */

    public function action_add() {
        if (Input::method() === 'POST') {
            if (Input::post('id') === "0" or Input::post('id') === "") {
                $val = Validation::forge();
                $val->add_callable('Complex');
                $val->add_field('email', 'Votre email', 'required|trim|valid_email');
                $val->add_field('nom', 'Votre Nom', 'required|trim');
                $val->add_field('prenom', 'Votre Prenom', 'required|trim');
                $val->add_field('pwd', 'Mot de passe', 'required|match_field[cpwd]|complexe');


                /* if(Complex::_validation_complexe($_POST['pwd'])){
                  $val->add_field('pwd', 'Mot de passe', 'required|match_field[cpwd]');
                  }else{  $mo=$_POST['pwd'];
                  $data['pwder'] = "le Mot de passe doit comporter  miniscule, majuscule,nombre et etre au moin egale a 8 caractere $mo";
                  $data['post'] = $_POST;
                  $view = View::forge('candidat/EnregistrerCandidat', $data);
                  $view->set_global('offres_right', $this->offresR);
                  $view->set_global('offres_left', $this->offresL);
                  return $view;
                  } */
                if ($val->run() and isset($_POST['condition'])) {
                    if (Model_Candidat::checkUser(Input::post('email'))) {
                        $data['error'] = "Cet utilisateur existe d&eacute;j&agrave; !";
                        $data['post'] = $_POST;
                        $template = View::forge('template');
                        $template->contenu = View::forge('candidat/EnregistrerCandidat', $data);
                        $template->set_global('offres_right', $this->offresR);
                        $template->set_global('offres_left', $this->offresL);
                        return $template;
                    } else {
                        $propeties = array('date_enreg' => Input::post('date_enreg'), 'email' => Input::post('email'), 'nom' => Input::post('nom'), 'prenom' => Input::post('prenom'), 'pays' => '',
                            'ville' => '', 'phone' => '', 'statut' => '', 'experience' => '', 'newsletter' => 1, 'photo' => 'no-profile.jpg',
                            'pwd' => sha1(Input::post('pwd')), 'tranche_age' => '', 'adresse' => '', 'etat_civil' => '', 'niveau_formation' => '',
                            'premiere_langue' => '', 'niveau_plangue' => '', 'deuxieme_langue' => '', 'niveau_dlangue' => '', 'cvdoc' => 'nofile.doc',
                            'show' => 1, 'alert' => 0, 'specialite' => '', 'ajout' => time(), 'expe' => 0
                        );
                        $candidat = new Model_Candidat($propeties);
                        $candidat->save();
                        if (!Model_Newsletter::isRegistred(Input::post('email'))) {
                            Model_Newsletter::saveNewsletter(Input::post('email'));
                        }
                        $candidat = Model_Candidat::connect(Input::post('email'), Input::post('pwd'));
                        $session = Session::instance();
                        $session->set('email', Input::post('email'));
                        $session->set('logged_candidat', true);
                        $session->set('id', $candidat->id);
                        $session->set('nom', $candidat->nom);
                        $session->set('prenom', $candidat->prenom);
                        $session->set('photo', $candidat->photo);
                        Response::redirect('candidat/profilCandidat');
                    }
                } else {
                    $data['post'] = $_POST;
                    $data['errors'] = $val->errors();
                    $data['candidat'] = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
                    $template = View::forge('template');
                    $template->contenu = View::forge('candidat/EnregistrerCandidat', $data);
                    $template->set_global('offres_right', $this->offresR);
                    $template->set_global('offres_left', $this->offresL);
                    return $template;
                }
            } else {
                $val = Validation::forge();
                $val->add_field('nom', 'Nom', 'required|trim');
                $val->add_field('prenom', 'Prenom', 'required|trim');
                //$val->add_field('pwd', 'Mot de passe', 'required');
                if ($val->run()) {
                    $candidat = Model_Candidat::find(Session::get('id'));
                    $candidat->nom = Input::post('nom');
                    $candidat->date_enreg = Input::post('date_enreg');
                    $candidat->prenom = Input::post('prenom');
                    $candidat->pays = Input::post('pays');
                    $candidat->ville = Input::post('ville');
                    $candidat->phone = Input::post('phone');
                    $candidat->statut = Input::post('statut');
                    $candidat->experience = Input::post('experience');
                    $candidat->specialite = Input::post('specialite');
                    $candidat->newsletter = Input::post('newsletter');
                    $candidat->photo = Input::post('photo');
                    $candidat->expe = intval(Input::post('expe'));
                    $candidat->niveau_dlangue = Input::post('niveau_dlangue');
                    $candidat->tranche_age = Input::post('tranche_age');
                    $candidat->adresse = Input::post('adresse');
                    $candidat->etat_civil = Input::post('etat_civil');
                    $candidat->niveau_formation = Input::post('niveau_formation');
                    $candidat->premiere_langue = Input::post('premiere_langue');
                    $candidat->niveau_plangue = Input::post('niveau_plangue');
                    $candidat->deuxieme_langue = Input::post('deuxieme_langue');
                    $candidat->cvdoc = Input::post('cvdoc');
                    $candidat->show = isset($_POST['show']) ? 1 : 0;
                    $candidat->alert = isset($_POST['alert']) ? 1 : 0;
                    $candidat->save();
                    Response::redirect('candidat/');
                } else {
                    $data['candidat'] = Model_Candidat::find()->where('id', Session::get('id'))->get_one();
                    $data['errors'] = $val->errors();
                    $template = View::forge('template');
                    $template->contenu = View::forge('candidat/profil_candidat', $data);
                    $template->set_global('offres_right', $this->offresR);
                    $template->set_global('offres_left', $this->offresL);
                    return $template;
                }
            }
        }
    }

    public function action_resetpostuler($idoffre) {

        Model_Candidat::resetPostuler(Session::get('id'), $idoffre);
        $offre = Model_Offre::find($idoffre);
        Session::delete('postuler');
        Response::redirect('offre/detail/' . $idoffre . '/' . $offre->titre);
    }

    public function action_postuler() {
        $idOffre = Input::post('idOffre');
        //Upload CV
        $postuler = Model_Candidat::checkPostuler(Session::get('id'), $idOffre);
        $offre = Model_Offre::find($idOffre);
        if ($postuler === 0) {
            $mail = Model_Recruteur::getEmail($offre->id);
            
            $cv = "";
            if (isset($_FILES['cv']) AND $_FILES['cv']['error'] == 0) {
                $ext = pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);
                $img = 'tmp_cv' . time() . '.' . $ext;
                $extensions_autorisees = array('pdf', 'doc', 'docx', 'txt');
                if (in_array($ext, $extensions_autorisees)) {
                    move_uploaded_file($_FILES['cv']['tmp_name'], DOCROOT . 'assets/upload/cv/' . $img);
                    $cv = $img;
                }
            } else {
                $cvcandidat = Model_Candidat::getCV(Session::get('id'));
                $cv = $cvcandidat->cvdoc;
            }
            $session = Session::instance();
            $session->set('postuler', 'Vous avez postulé avec succès à cette Offre');
            Model_Candidat::postuler(Session::get('id'), $idOffre, $cv, addslashes(Input::post('lettre')));
            $email = Email::forge();
            // envoyer un email au candidat
            $email->from('contact@guinee-emploi.com');
            $email->to(Session::get('email'));
            $email->subject('Votre Candidature');
            $email->body('Votre Candidature pour l\'offre ' . $offre->titre . ' a été enregistré avec succès');
            //$email->send();
            // envoyer un email au recruteur
            $email->from('contact@guinee-emploi.com');
            $email->to($mail->email);

            /* if (file_exists(DOCROOT . 'assets/upload/' . $cv->cvdoc))
              $email->attach(DOCROOT . 'assets/upload/' . $cv->cvdoc); */
            $email->subject($offre->titre);
            $email->body('Une Candidature pour l\'offre ' . $offre->titre . ' que vous avez publiée a été enregistré \n Rendez vous dans votre espace Guinée Emploi pour plus de detail');
            //$email->send();         
            Response::redirect('offre/detail/' . $idOffre . '/' . $offre->titre);
        } else {
            $session = Session::instance();
            $session->set('postuler', 'Vous avez Déja postulé à cette offre');
            Response::redirect('offre/detail/' . $idOffre . '/' . $offre->titre);
        }
    }

    public function action_UpdateCV() {
        if (Session::get('logged_candidat')) {
            if (isset($_FILES['cv']) AND $_FILES['cv']['error'] == 0) {
                $ext = pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);
                $extention_permises = array('doc', 'docx', 'pdf');
                if (in_array($ext, $extention_permises)) {
                    if ($_FILES['monfichier']['size'] <= 2000000) {
                        $img = 'cv' . time() . '.' . $ext;
                        move_uploaded_file($_FILES['cv']['tmp_name'], DOCROOT . 'assets/upload/cv/' . $img);
                        $candidat = Model_Candidat::find(Session::get('id'));
                        $candidat->cvdoc = $img;
                        $candidat->save();
                        Response::redirect('candidat');
                    } else {
                        $session = Session::instance();
                        $session->set_flash('erreur', 'Veriffier  que la taille de votre  fichier est bien inférieur ou égale à 2 Mega octet (2Mo)Obligatoirement');
                        Response::redirect('candidat');
                    }
                } else {
                    $session = Session::instance();
                    $session->set_flash('erreur', 'Verifier  que votre fichier est bien du type(doc,docx,pdf) Obligatoirement');
                    Response::redirect('candidat');
                }
            } else
                Response::redirect('candidat');
        } else
            Response::redirect('front/loginCandidat');
    }

    /**
     * The 404 action for the application.
     *
     * @access  public
     * @return  Response
     */
    public function action_deleteCV() {
        if (Session::get('logged_candidat')) {
            $candidat = Model_Candidat::find(Session::get('id'));
            @unlink(DOCROOT . 'assets/upload/cv/' . $candidat->cvdoc);
            $candidat->cvdoc = 'nofile.doc';
            $candidat->save();
            Response::redirect('candidat');
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_404() {
        return Response::forge(View::forge('404'), 404);
    }

    public function action_detail($id = null) {
        if ((Session::get('logged_recruteur') and Session::get('actif') == 1) or Session::get('isAdmin') or $id == Session::get('id')) {
            $offre = new Model_Offre();
            $candidat = Model_Candidat::find()->where('id', $id)->get_one();
            if (!$candidat->nom) {
                \Fuel\Core\Response::redirect('cvtheque');
            }
            $data['candidat'] = $candidat;
            $template = View::forge('template');
            $template->contenu = View::forge('candidat/detail', $data, false);
            $template->set_global('offres_right', $this->offresR);
            $template->set_global('offre', $offre); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            return $template;
        } else
            Response::redirect('front/loginRecruteur');
    }

    public function action_filtre() {
        $this->auto_render = false;
        $cvs = Model_Candidat:: filtre(Input::post('competence'), Input::post('ville'), Input::post('tranche_age'), Input::post('statut'), Input::post('niveau_formation'), Input::post('langue'), $this->perpage);
        foreach ($cvs as $cv) {
            echo'<div class="col-lg-12 tout" id="' . $cv->ajout . '">
                    <div class="row ">
                       <div class="col-lg-9">
                               <div class="row">
                                  <div class="col-lg-12">
                                     <h5 class="title"><a href="' . Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) . '">' . stripslashes($cv->nom . ' ' . $cv->prenom) . '</a></h5>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-lg-12">
                                        <p class="soustitle"><a href="#" class="first">' . $cv->niveau_formation . '</a><a href="#">' . $cv->tranche_age . '</a><a href="#">' . $cv->premiere_langue . '-' . $cv->deuxieme_langue . '</a><a href="#">' . $cv->statut . '</a><a href="#" class="last">' . stripslashes($cv->ville) . '</a></p>
                                     </div>
                               </div>
                               <div class="row">
                                    <div class="col-lg-12 text">
                                        <span class="glyphicon glyphicon-tag"></span> ' . stripslashes($cv->specialite) . '<br>
                                        <span class="glyphicon glyphicon-briefcase"></span> ' . (($cv->expe == 0) ? "Pas d'expérience" : stripslashes($cv->expe) . " ans d\'expérience") . '
                                    </div>  
                               </div>  
                        </div>   
                       <div class="col-lg-2">
                           <a href="' . Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) . '">'
                            . '<img class="img-responsive" src="' . Uri::base(false) . 'assets/upload/photo/' . $cv->photo . '" />
                           </a>
                        </div>                                                                             
                    </div>
                 </div>';
        }
    }

    public function action_nextFiltre($ajout = 0) {
        $this->auto_render = false;
        $cvs = Model_Candidat:: nextfiltre(Input::post('competence'), Input::post('ville'), Input::post('tranche_age'), Input::post('statut'), Input::post('niveau_formation'), Input::post('langue'), $ajout, $this->perpage);
        foreach ($cvs as $cv) {
            echo'<div class="col-lg-12 tout" id="' . $cv->ajout . '">
                    <div class="row ">
                       <div class="col-lg-9">
                               <div class="row">
                                  <div class="col-lg-12">
                                     <h5 class="title"><a href="' . Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) . '">' . stripslashes($cv->nom . ' ' . $cv->prenom) . '</a></h5>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-lg-12">
                                        <p class="soustitle"><a href="#" class="first">' . $cv->niveau_formation . '</a><a href="#">' . $cv->tranche_age . '</a><a href="#">' . $cv->premiere_langue . '-' . $cv->deuxieme_langue . '</a><a href="#">' . $cv->statut . '</a><a href="#" class="last">' . stripslashes($cv->ville) . '</a></p>
                                     </div>
                               </div>
                               <div class="row">
                                    <div class="col-lg-12 text">
                                        <span class="glyphicon glyphicon-tag"></span> ' . stripslashes($cv->specialite) . '<br>
                                        <span class="glyphicon glyphicon-briefcase"></span> ' . (($cv->expe == 0) ? "Pas d'expérience" : stripslashes($cv->expe) . " ans d\'expérience") . '
                                    </div>  
                               </div>  
                        </div>   
                       <div class="col-lg-2">
                           <a href="' . Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) . '">'
                            . '<img class="img-responsive" src="' . Uri::base(false) . 'assets/upload/photo/' . $cv->photo . '"  />
                           </a>
                        </div>                                                                             
                    </div>
                 </div>';
        }
    }

    public function action_nextCvtheque($ajout = 0) {
        $this->auto_render = false;
        $cvs = Model_Candidat::getNextCvtheque($ajout, $this->perpage);
        foreach ($cvs as $cv) {
            echo'<div class="col-lg-12 tout" id="' . $cv->ajout . '">
                    <div class="row ">
                       <div class="col-lg-9">
                               <div class="row">
                                  <div class="col-lg-12">
                                     <h5 class="title"><a href="' . Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) . '">' . stripslashes($cv->nom . ' ' . $cv->prenom) . '</a></h5>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-lg-12">
                                        <p class="soustitle"><a href="#" class="first">' . $cv->niveau_formation . '</a><a href="#">' . $cv->tranche_age . '</a><a href="#">' . $cv->premiere_langue . '-' . $cv->deuxieme_langue . '</a><a href="#">' . $cv->statut . '</a><a href="#" class="last">' . stripslashes($cv->ville) . '</a></p>
                                     </div>
                               </div>
                               <div class="row">
                                    <div class="col-lg-12 text">
                                        <span class="glyphicon glyphicon-tag"></span> ' . stripslashes($cv->specialite) . '<br>
                                        <span class="glyphicon glyphicon-briefcase"></span> ' . (($cv->expe == 0) ? "Pas d'expérience" : stripslashes($cv->expe) . " ans d\'expérience") . '
                                    </div>  
                               </div>  
                        </div>   
                       <div class="col-lg-2">
                           <a href="' . Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) . '">'
                            . '<img class="img-responsive" src="' . Uri::base(false) . 'assets/upload/photo/' . $cv->photo . '"  />
                           </a>
                        </div>                                                                             
                    </div>
                 </div>';
        }
    }

    public function action_sendMsgrec() {
        $id = $_POST['recruteur'];
        $msg = Model_MessageRecruteur::forge();
        $msg->sujet = $_POST['sujet'];
        $msg->message = $_POST['message'];
        $msg->candidat_id = Session::get('id');
        $msg->recruteur_id = $id;
        $msg->ajout = time();
        $msg->lu = 0;
        $msg->save();
        echo "1";
    }

    public function action_messagesCandidat($start = 0, $nb = 4) {
        if (Session::get('logged_candidat')) {
            $offre = new Model_Offre(); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            $total = Model_MessageCandidat::getMessagesAll(Session::get('id'));
            $candidat = Model_Candidat::find(Session::get('id'));
            $config = array(
                'pagination_url' => Uri::create('candidat/messagesCandidat/' . Session::get('id')),
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
            $data['messages'] = Model_MessageCandidat::getMessages(Session::get('id'), Pagination::$offset, Pagination::$per_page);
            $template = View::forge('template');
            $template->contenu = View::forge('candidat/messagesCandidat', $data);
            $template->set_global('offres_right', $this->offresR);
            $template->set_global('pagination', $pagination);
            $template->set_global('candidat', $candidat);
            $template->set_global('offres_left', $this->offresL);
            $template->set_global('offre', $offre); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            return $template;
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_detailM($id = NULL) {
        if (Session::get('logged_candidat')) {
            $offre = new Model_Offre(); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            $lemessage= Model_MessageCandidat::find($id);
            $candidat= Model_Candidat::find(Session::get('id'));
            $tpl=  Fuel\Core\View::forge('template');
            $tpl->contenu = View::forge('candidat/detailmsgC');
            $tpl->set_global('lemessage', $lemessage);
            $tpl->set_global('candidat', $candidat);
            $tpl->set_global('offres_right', $this->offresR);
            $tpl->set_global('offres_left', $this->offresL);
            $tpl->set_global('offre', $offre); // Pour eviter que offre n'existe pas dans inc/space et inc/espace
            return $tpl;
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_removeMessage($id) {
        if (Session::get('logged_candidat')) {
            Model_MessageCandidat::remove($id, Session::get('id'));
            Fuel\Core\Response::redirect('candidat/messagesCandidat');
        } else
            Response::redirect('front/loginCandidat');
    }

    public function action_envoyer_message($offre_id = '')
    {
        //SECURITE
        //Si l'ID de l'offre n'existe pas et si l'offre avec un tel ID n'existe pas on renvoi le user
        $offre = Model_Offre::find($offre_id);
        if($offre == null)
        {
            exit();
        }

        /*Cette page doit etre traitée en ajax. Donc si l'utilisateur essaye d'accéder à cette
        page sans ajax on termine le scrit avec la fonction exit() de php*/
        if(!\Fuel\Core\Input::is_ajax())
        {
            exit();
        }
        else{
            //On charge la bibliothèthe de validation des formulaires
            $val = \Fuel\Core\Validation::forge();
            $val->add_field('sujet','Sujet','required');
            $val->add_field('message','Message','required');
            if($val->run()){
                $message = new Model_MessageRecruteur();
                $message->candidat_id = Session::get('id');
                $message->recruteur_id = $offre->recruteur_id;
                $message->sujet = \Fuel\Core\Input::post('sujet');
                $message->message = \Fuel\Core\Input::post('message');
                $message->ajout = date("Y-m-d H:i:s");
                $message->lu = 0;
                if($message->save()){
                    echo 'success';
                }
                else{
                    echo 'error';
                }

            }
            else{
                echo current($val->errors());
            }

        }
    }

}
