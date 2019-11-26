<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('userModel');
    }


    public function check()
    {
       
            $email_user = $this->input->post('courriel');
            $password_user= $this->input->post('password');
            $userExist = $this->userModel->check($email_user, $password_user);
            if($userExist){

                return redirect("welcome");
            }
           
    }
    function logout(){
       // $this->session->sess_destroy();
        redirect('index');
    }

	public function index()
	{
		//$this->load->view('welcome_message');
		echo $this->blade->view()->make('login/index');
	}
}
