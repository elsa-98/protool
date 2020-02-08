<?php 
 
class Users_model extends CI_Model
 { 
     
    function __construct() { 
        parent::__construct(); 
    }
    public function insert($data)
    {
        if ($this->db->insert("user_reg",$data))
        {
            return true;
        }
    }
    public function display_records()
	{
	$query=$this->db->query("select * from user_reg");
	return $query->result();
    }
    /*Update*/
	public function approve($id)
	{
     echo $id;
     $query=$this->db->query("update user_reg SET status='approved' where user_id=$id");
	}

    public function view_pro_head()
    {
        $query=$this->db->query("select * from user_reg where designation='project_head' ");
	    return $query->result();

    }
    public function assign($data)
    {
        if ($this->db->insert("project_assign",$data))
        {
            return true;
        }
    }
    public function view_projects()
    {
        $query=$this->db->query("select * from project_assign");
	    return $query->result();
    }
    public function view_ui()
    {
        $query=$this->db->query("select * from user_reg where designation='ui_developer' ");
	    return $query->result();
    }
    public function view_back()
    {
        $query=$this->db->query("select * from user_reg where designation='back_end' ");
	    return $query->result();
    }
    public function view_tester()
    {
        $query=$this->db->query("select * from user_reg where designation='tester' ");
	    return $query->result();
    }
    public function view_qua()
    {
        $query=$this->db->query("select * from user_reg where designation='quality_tester' ");
	    return $query->result();
    }
    public function login($username, $password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('user_reg');
    
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                //add all data to session
                $newdata = array(
                    'user_id'   => $row->id,
                    'username'  => $row->username,
                    'email'     => $row->email,
                    'password'  => $row->password,
                    'logged_in' => TRUE,
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }

  
         
 }
         
 