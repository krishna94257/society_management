<?php
class Fund extends CI_Controller
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
		  $this->Maintenance_model->fund_add();
		  redirect("fund/list"); 
		}
		else
		{
	       $this->load->view('header.php');
	       $this->load->view('fund.php');
	       $this->load->view('footer.php');
		}
	}
	public function list()
	{
	  $data['p'] = $this->Maintenance_model->fund_list();
	  $this->load->view('header');
	  $this->load->view('fundlist',$data);
	  $this->load->view('footer');
	}
	public function delete() 
	{
	  $id=$this->input->get('id');
	  $this->Maintenance_model->fund_delete($id);
	 redirect("fund/list");      
    }
    
	 public function edit()
    {
	  if(isset($_SESSION['username']))
	  {    
	    //$data['a'] = $this->Owner_model->get_owner();
	    $id = $this->uri->segment(3);
	    $id=$this->input->get('id');
	    $data['p'] = $this->Maintenance_model->get_fund_by_id($id);
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
