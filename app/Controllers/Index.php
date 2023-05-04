<?php

namespace App\Controllers;

class Index extends ClientController
{
    protected $session;

    public function __construct(){
        $this->session = \Config\Services::session();
        $this->zone = 'client';
    }

    public function index()
    {
        $this->render('Accueil', 'index');
    }

    public function authentification(){
       
        if($this->request->getMethod() == 'post'){
			$login = $this->request->getVar('login');
			$password = $this->request->getVar('password');
            
			$rules = [
				"login" => ['rules'=> 'trim|required|min_length[1]|max_length[64]'],
				"password" => ['rules'=> 'trim|required|min_length[1]|max_length[255]|validateUser['.$login.']']
			];
			$errors = [
				"password" => ["validateUser" => "Le login ou le mot de passe ne correspondent pas"]
			];

			if(!$this->validate($rules, $errors)){
				$this->data["validation"] = $this->validator;		
			}
			else{
				$authM = new Auth_model();
				$user = $authM->authentification($this->request->getVar('login'), $this->request->getVar('password')); 
				if(!empty($user)){
					
					$this->setUsersession($user[0]);
					return redirect()->to(base_url("home"));
				}
			}
		}
        $this->render('Authentification', 'login-form');
    }

    protected function setUsersession($user){

        $data = [
            'email' => $user->type_compte,
            'login' => $user->login,
            'password' => $user->password,
            'isLoggedIn' => true,
            'connect' => true,
            "id_centre_examen" => "4"
        ];
        set_session_data($data);
        return true;
    }

    public function logout(){
        session()->destroy();
        var_dump("hello");
        exit();
        return redirect()->to(base_url());
    }

    public function motDePasseOublie(){
        return redirect()->to(base_url());
    }
}
