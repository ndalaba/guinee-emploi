<?php

class Controller_Admin_Admin extends Controller {

    public $template = 'admin/template';

    public function action_index() {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/home';
            $content = View::forge('admin/index',$data);
            $content->set_global('nonlu', count(Model_Contact::getNonlu()));
            $content->set_global('newsR', Model_Recruteur::countNew());
            return $content;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_connection() {
        $this->auto_render = false;
        $data['titre'] = "Connection à l'admin de Guinee-emploi";
        if (Input::method() === 'POST') {
            $val = Validation::forge();
            $val->add('login', 'Votre login')->add_rule('required');
            $val->add('pwd', 'Mot de passe')->add_rule('required');
            if ($val->run()) {
                $admin = Model_User::connect(Input::post('login'), Input::post('pwd'));
                if (isset($admin)) {
                    $session = Session::instance();
                    //$session->set('id', $admin->id);
                    $session->set('login', $admin->login);
                    $session->set('droit', $admin->droit);
                    $session->set('nom',$admin->nom);
                    $session->set('isAdmin', TRUE);
                    Response::redirect('admin/admin/index');
                } else {
                    $data['error'] = "Login ou mot de passe incorrect";
                    return View::forge('admin/connection', $data);
                }
            } else
                return View::forge('admin/connection', $data);
        } else
            return View::forge('admin/connection', $data);
    }

    public function action_deconnection() {
        Session::destroy();
        Response::redirect('admin/admin/connection');
    }

    private static function formatDate($date) {
        $f = explode("/", Input::post('datedebut'));
        $f = array_reverse($f);
        $format = implode('-', $f);
        return $format;
    }

    public function action_newsletter() {
        $email = Email::forge();
        $email->from($_POST['email'], $_POST['nom']);
        $email->to('receiver@elsewhere.co.uk', 'GuineeShow');
        $email->subject($_POST['sujet']);
        $email->html_body(View::forge('nl', $data));
        $email->send();
    }

    public function action_partenaires() {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/partenaire';
            $view = View::forge('admin/template', $data);
            $view->set_global('partenaires', Model_Partenaire::find("all"), false);
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_getPartenaire($id) {
        if (Session::get('isAdmin')) {
            $data['content'] = 'admin/partenaire';
            $view = View::forge('admin/template', $data);
            $view->set_global('partenaire', Model_Partenaire::find($id));
            $view->set_global('partenaires', Model_Partenaire::find("all"), false);
            return $view;
        } else
            Response::redirect('admin/admin/connection');
    }

    public function action_savePartenaire() {
        if (Input::method() === 'POST') {
            if (Session::get('isAdmin')) {
                if (!Input::post('id')) {
                    $part = new Model_Partenaire();
                    $part->nom_parte = Input::post('nom');
                    $part->site_web = Input::post('site');
                    $part->logo_parte = '';

                    if (isset($_FILES['logo']) AND $_FILES['logo']['error'] == 0) {
                        $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
                        $extention_permises = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG');
                        if (in_array($ext, $extention_permises)) {
                            if ($_FILES['logo']['size'] <= 2000000) {
                                $img = 'logo_parte' . time() . '.' . $ext;
                                move_uploaded_file($_FILES['logo']['tmp_name'], DOCROOT . 'assets/upload/partenaires/' . $img);

                                $part->logo_parte = $img;
                            }
                        } else {
                            $data['content'] = 'admin/partenaire';
                            $view = View::forge('admin/template', $data);
                            $view->set_global('message', 'Verifier le format du logo');
                            $view->set_global('partenaires', Model_Partenaire::find("all"), false);
                            return $view;
                        }
                    } else {
                        $data['content'] = 'admin/partenaire';
                        $view = View::forge('admin/template', $data);
                        $view->set_global('message', 'Verifier le logo');
                        $view->set_global('partenaires', Model_Partenaire::find("all"), false);
                        return $view;
                    }

                    $part->save();
                    Response::redirect('admin/admin/partenaires');
                } else {
                    $part = Model_Partenaire::find(Input::post('id'));
                    $part->nom_parte = Input::post('nom');
                    $part->site_web = Input::post('site');
                    if (isset($_FILES['logo']) AND $_FILES['logo']['error'] == 0) {
                        $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
                        $extention_permises = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG');
                        if (in_array($ext, $extention_permises)) {
                            if ($_FILES['logo']['size'] <= 2000000) {
                                $img = 'logo_parte' . time() . '.' . $ext;
                                move_uploaded_file($_FILES['logo']['tmp_name'], DOCROOT . 'assets/upload/partenaires/' . $img);
                                $part->logo_parte = $img;
                            }
                        }
                    }

                    $part->save();
                    Response::redirect('admin/admin/partenaires');
                }
            } else
                Response::redirect('admin/admin/connection');
        }
    }

    public function action_delPartenaire($id = 0) {
        DB::query("DELETE FROM partenaires WHERE id=" . (int) $id)->execute();
        Response::redirect('admin/admin/partenaires');
    }

}
