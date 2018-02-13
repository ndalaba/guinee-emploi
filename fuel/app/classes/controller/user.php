<?php

/**
 * Description of User Controller
 *
 * @author NDalaba
 */
class Controller_User extends Controller {

    public function action_index() {
        if (Session::get('droit') >= 3) {
            $users = Model_User::find('all');
            $data['content'] = "admin/user";
             $v= View::forge('admin/template', $data);
             $v->set_global('users',$users);
             return $v;
       }
    }

    public function action_saveuser() {
        if (Input::method() === 'POST') {
            if (Input::post('id') === "0" or Input::post('id') === "") {
                $user = Model_User::forge($_POST);
                if (Model_User::checkUser($user->login)) {
                    $data['error'] = "Cet utilisateur existe !";
                    $data['users'] = Model_User::find('all');
                    $data['user'] = $user;                  
                     return View::forge('admin/template', $data);
                } else {
                    $user->pwd = sha1(Input::post('pwd'));
                    $user->save();
                    Response::redirect('user/');
                }
            } else {
                $user = Model_User::find(Input::post('id'));
                $user->login = Input::post('login');
                $user->nom = Input::post('nom');
                $user->droit = Input::post('droit');
                if (strlen(Input::post('pwd')) != 0)  //Nouveau mot de passe sinon on garde l'encien	
                    $user->pwd = sha1(Input::post('pwd'));
                $user->save();
                Response::redirect('user/');
            }
        }
        else
            Response::redirect('user/');
    }

     public function action_loaduser($id = null) {
        $user = Model_User::find($id);
        $users = Model_User::find('all');      
        $data['content'] = 'admin/user';
        $v= View::forge('admin/template', $data);
        $v->set_global('users',$users);
        $v->set_global('user',$user);
        return $v;
    }

    public function action_deleteuser() {
        DB::query("DELETE FROM admin WHERE id=" . (int) Input::post('id'))->execute();
    }

    public function action_connection() {
        if (Input::method() === 'POST') {
            $val = Validation::forge();
            $val->add('login', 'Votre login')->add_rule('required');
            $val->add('pwd', 'Mot de passe')->add_rule('required');
            if ($val->run()) {
                $admin = Model_User::connect(Input::post('login'), Input::post('pwd'));
                if (isset($admin)) {
                    $session = Session::instance();
                    $session->set('id', $admin->id);
                    $session->set('login', $admin->login);
                    $session->set('droit', $admin->droit);
                    $session->set('admin', TRUE);                   
                    Response::redirect('admin/index');
                } else {
                    $data['error'] = "Login ou mot de passe incorrect";
                    return View::forge('admin/template', $data);
                }
            }
            else
                return View::forge('admin');
        }
    }

    public function action_deconnection() {
        Session::destroy();
        Response::redirect('admin/index');
    }

}
