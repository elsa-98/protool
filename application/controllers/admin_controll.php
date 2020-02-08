
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_controll extends CI_Controller {

    public function load_home()
	{
		$this->load->helper('url');
		$this->load->view('admin_home');
	}
	public function logout()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
    }

    
    public function load_assigned_proj()
	{
		$this->load->model('Users_model');
		$result['data']=$this->Users_model->view_projects();
	    $this->load->view('admin_assigned_proj',$result);
	}

    public function load_compl_proj()
	{
		$this->load->helper('url');
		$this->load->view('admin_compl_projects');
    }
    public function load_pending_proj()
	{
		$this->load->helper('url');
		$this->load->view('admin_pending_projects');
    }
    public function load_proj_teams()
	{
		$this->load->helper('url');
		$this->load->view('admin_project_teams');
	}

	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Users_model');
	}
   /*Display*/
	public function load_employees()
	{
	$result['data']=$this->Users_model->display_records();
	$this->load->view('admin_employees',$result);
	}

	public function approve()
	{
		$this->load->helper('url');
	     $id  = $this->uri->segment(3);
		echo $id;
		$this->Users_model->approve($id);
		$this->load->helper('url');
		$this->load_employees();

	}
	public function load_new_proj()
	{
		
		$this->load->model('Users_model');
		$result['data']=$this->Users_model->view_pro_head();
	    $this->load->view('admin_assign_new_proj',$result);
	}
	public function assign_new_proj()
	{
		$this->load->model('Users_model');
		$data=array('project'=>$this->input->post('project'),
					'project_head'=>$this->input->post('project_head'),
					'time'=>$this->input->post('time'),
					'description'=>$this->input->post('description')
				   );
		$this->Users_model->assign($data);//insert function
		$this->load->helper('url');
		$this->load->view('admin_assigned_proj');

	}
	
	public function load_view_team()
	{
		$this->load->helper('url');
		$this->load->view('admin_view_team');

	}
	public function load_new_team()
	{
		
		$this->load->model('Users_model');
		$result['data']  =$this->Users_model->view_pro_head();
		$result1['data1']=$this->Users_model->view_ui();
		$result2['data2']=$this->Users_model->view_back();
		$result3['data3']=$this->Users_model->view_tester();
		$result4['data4']=$this->Users_model->view_qua();
	    $this->load->view('admin_create_team',$result,$result1,$result2,$result3,$result4);

	}
}