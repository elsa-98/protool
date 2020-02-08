<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
	}
    public function load_login()
	{
		$this->load->helper('url');
		$this->load->view('login');
	}
	public function load_register()
	{
		$this->load->helper('url');
		$this->load->view('register');
	}
	public function load_index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
	}

	public function register()
	{
		$this->load->model('Users_model');
		$data=array('name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'mobile'=>$this->input->post('mobile'),
					'designation'=>$this->input->post('designation'),
					'username'=>$this->input->post('username'),
					'password'=>$this->input->post('password')
					 );
		$this->Users_model->insert($data);//insert function
		$this->load->helper('url');
		$this->load->view('login');
	}
	public function authenticate()
	{
		$this->load->model('Users_model');
		$user_name     = $this->input->post('username');
		$password      = $this->input->post('password');
		if($user_name=='admin@gmail.com' and $password=='admin')
		{
			$this->load->helper('url');
		    $this->load->view('admin_home');
		}
		else
		{
			$this->load->model('Users_model');
		    $user_name     = $this->input->post('username');
		    $password      = $this->input->post('password');
        
        
            if ( $this->Users_model->login($user_name, $password))
             { 
				 //If success login
				$this->load->helper('url');
                $this->load->view('pro_head_home');
                //Here we can echo success because both the form validation was successfull and the login. 
			} 
			else 
			{
                $this->load->view('login');
                //echo "invalid details";
                //Here goes the Error message
            }


		}

		
		
	}

	

	
		
}
