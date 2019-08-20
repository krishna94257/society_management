<?php
class Maintenance extends CI_Controller
{
   public function __construct()
   {
	  parent::__construct();
	  $this->load->model('Maintenance_model');
	  $this->load->model('Flat_model');
	  $this->load->model('Owner_model');
	  $this->load->library('session');
	  $this->load->helper('url_helper');
	  $this->load->database();
	}
	
	public function add()
	{
	  if(isset($_POST['submit']))
	  {	
		$flat = $this->input->post('flat');
		$year = $this->input->post('year');
	    $month = $this->input->post('month');
	    $month_name =  implode(",", $month);
		$query = $this->db->query("SELECT * FROM sm_maintenance WHERE flat ='$flat' && month = '$month_name' && year ='$year'");
		//print_r($this->db->last_query()); 
		$r = $query->num_rows();
		if(!$r)
		{
	      $this->Maintenance_model->add();
	      redirect('maintenance/list');
	    }
	    else
	    {
		  echo'<script>alert("EITHER FLATNAME OR MONTH ALREADY EXISTS");</script>';
		}
		 redirect('maintenance/list');
	  }
	  else
	  {
		$data['p'] = $this->Owner_model->get_owner();
	    $this->load->view('header');
	    $this->load->view('maintenance',$data);
	    $this->load->view('footer');
	  }
	}
	
	public function maintenancelist()
	{
		 $id = $this->input->post('id');
		// echo$id;
		 $data['p'] = $this->Maintenance_model->get_owner_by_id($id);
		$this->load->view('getmain',$data);
	}
	public function amount()
	{
		 $id = $this->input->post('id');
		// echo$id;
		 $data['p'] = $this->Maintenance_model->get_owner_by_id($id);
		$this->load->view('getamount',$data);
	}
	public function list()
	{
	   $data['p'] = $this->Maintenance_model->get();
	   $this->load->view('header');
	   $this->load->view('filter',$data);
	   $this->load->view('footer');
	   
	}
	public function monthlist()
	{
		$data = $this->input->get('list');
		$year = $this->input->get('year');
		$month = $this->Maintenance_model->get_newlist($data,$year);
	  
		 $month =  array('data'=> $month);
		//print_r($data);
		echo json_encode($month);
			   
	}
	public function delete() 
	{
	  $id=$this->input->get('id');
	  $this->Maintenance_model->delete($id);
	 redirect("maintenance/list");      
    }
    
	 public function edit()
    {
	  if(isset($_SESSION['username']))
	  {    
	    $data['a'] = $this->Owner_model->get_owner();
	    $id = $this->uri->segment(3);
	    $id=$this->input->get('id');
	    $data['p'] = $this->Maintenance_model->get_maintenance_by_id($id);
	    if(empty($id))
	    {
	     echo'<script>alert("NO DATA AVAILABLE"); </script>';
	    }
		// print_r($get);
	   $this->load->view('header');
	   $this->load->view('maintenanceedit',$data);
	   $this->load->view('footer');
      }
      else
	  {
		$this->load->view('login');
	  }
	}
		          
    public function update()
     {
		$id = $this->input->post('id');
		$id1 = $this->input->post('flat');
		$this->Maintenance_model->update($id);
		redirect('maintenance/list');
	     
	 }
}
?>
