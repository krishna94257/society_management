<?php
class Owner extends CI_Controller
{
       
  public function __construct()
   {
		parent::__construct();
		$this->load->model('Society_model');
		$this->load->model('Owner_model');
		$this->load->model('Flat_model');
		$this->load->helper('url_helper');
		$this->load->library('session');
		//$this->session->has_userdata('username');
   }
         
  public function index()
   {	
	  if(isset($_SESSION['username']))
	  {
		   $data['p'] = $this->Society_model->get_wing();
		   $this->load->view('header');
		   $this->load->view('owner',$data);
		   $this->load->view('footer');
	   }
	 else
      {
		$this->load->view('login');
	   }
    }
		
  public function add()
   {
		 if(isset($_SESSION['username']))
		  { 
		    $flatname = $this->input->post('flat');
			//$password = $this->input->post('password');
			$que=$this->db->query("select * from sm_owner where flatname='$flatname'");
			$row = $que->num_rows();
			if(!$row)
			 {
			   $this->Owner_model->add_owner();
			   redirect("owner/list");
			 }
			else
			 {
				echo'<script>alert("Flat ALready Booked"); </script>';
			 }
		      $this->load->view('header');
		      $this->load->view('owner');
		      $this->load->view('footer'); 
		   } 
		   else
		   {
			 $this->load->view('login');
		   }     
   }	
					           	
  public function list()
  {		
	 if(isset($_SESSION['username']))
	 {
	   $data['p'] = $this->Owner_model->get_owner();
	   $this->load->view('header');
	   $this->load->view('ownerlist',$data);
	   $this->load->view('footer');
	  }
	  else
	  {
		$this->load->view('login');  
	  }
   }
		 
	public function delete() 
	{
	  $id=$this->input->get('id');
	  $this->Owner_model->delete($id);
	 redirect("owner/list");      
    }
                    
    public function edit()
    {
	  if(isset($_SESSION['username']))
	  {    
	    $data['a'] = $this->Society_model->get_wing();
	    $id = $this->uri->segment(3);
	    $id=$this->input->get('id');
	    $data['p'] = $this->Owner_model->get_owner_by_id($id);
	    if(empty($id))
	    {
	     echo'<script>alert("NO DATA AVAILABLE"); </script>';
	    }
		// print_r($get);
	   $this->load->view('header');
	   $this->load->view('owneredit',$data);
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
		//$query =$this->db->query("SELECT * FROM owner WHERE flatname = '$id1'");
		//$r = $query->num_rows();
		// if(!$r)
		 //{
		  $this->Owner_model->update_owner($id);
		  redirect('owner/list');
	     //}
	    // else
	    // {
		 // echo'<script>alert("Flat Name already Exists");</script>';
		 //}
		// redirect('owner/list');
	 }
		 
	Public function winglist()
	{				
	   if(isset($_SESSION['username']))
	   {
		 $id = $this->input->post('id');
		 $data['p'] = $this->Society_model->get_wing_by_id($id);
		 $this->load->view('getowner',$data);
		}
	  else
	   {
		 $this->load->view('login');
		} 
	}
       
    public function flatlist()
    {
	  if(isset($_SESSION['username']))
	   {
		 $id = $this->input->post('id');
		 $id1 = $this->input->post('id1');
		 $data['p'] = $this->Flat_model->get_flatname_by_id($id,$id1);
		  //print_r($data);
	     if(empty($data))
		 {
		   echo"No Flats Available";
	     }
	     else
	     {
		  $this->load->view('getflat',$data);
	     }
	   }
	   else
	   {
		 $this->load->view('login');
	    } 
     }   	                       		                                  
}
