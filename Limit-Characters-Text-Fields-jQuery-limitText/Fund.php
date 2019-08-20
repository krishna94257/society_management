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
	
  public function fundadd()
  {
   if(isset($_SESSION['username']))
   {
       if(isset($_POST['submit']))
	   {
		   $category = $this->input->post('category');
		  $year = $this->input->post('year');
		  $othercategory = $this->input->post('othercategory');
		  if(!empty($category))
		  {
             $query = $this->db->query("SELECT * FROM sm_maintenance WHERE category ='$category' && year ='$year'");
	       }
	       else
	       {
			$query = $this->db->query("SELECT * FROM sm_maintenance WHERE category ='$othercategory' && year ='$year'");
			}
		  //print_r($this->db->last_query()); 
		 $r = $query->num_rows();
		 if(!$r)
		  {
	      $this->Maintenance_model->fund_add();
	       redirect("fund/fundlist"); 
	     }
	    else
	     {
		     echo'<script>alert("Entry For This Category  & Year  Already Exists"); </script>';
		    //~ // $this->session->set_flashdata('maintenance','<script>alert("Flat ALready Booked");</script>');
		  }
		  
	      $data['p'] = $this->Maintenance_model->get_fundtype();
	      $this->load->view('header.php');
	      $this->load->view('fund.php',$data);
	       $this->load->view('footer.php');
	   }
	   else
	   {
		   $data['p'] = $this->Maintenance_model->get_fundtype();
	       $this->load->view('header.php');
	       $this->load->view('fund.php',$data);
	       $this->load->view('footer.php');
	   }
     }
     else
	  {
		$this->load->view('login');
	  }
   }
   
   public function type()
  {
   if(isset($_SESSION['username']))
   {
       if(isset($_POST['submit']))
	   {
	    $this->Maintenance_model->fund_type();
	    redirect("fund/typelist"); 
	   }
	   else
	   {
	       $this->load->view('header.php');
	       $this->load->view('fundtype.php');
	       $this->load->view('footer.php');
	   }
     }
     else
	  {
		$this->load->view('login');
	  }
   }
   
   public function typelist()
	{
	 if(isset($_SESSION['username']))
	  {
	  $data['p'] = $this->Maintenance_model->get_fundtype();
	  $this->load->view('header');
	  $this->load->view('fundtypelist',$data);
	  $this->load->view('footer');
      }
      else
	  {
		$this->load->view('login');
	  }
	}
   
	public function fundlist()
	{
	 if(isset($_SESSION['username']))
	  {
	  $data['p'] = $this->Maintenance_model->fund_list();
	  $this->load->view('header');
	  $this->load->view('fundlist',$data);
	  $this->load->view('footer');
      }
      else
	  {
		$this->load->view('login');
	  }
	}
	public function delete() 
	{
	  if(isset($_SESSION['username']))
	  {
	  $id=$this->input->get('id');
	  $this->Maintenance_model->fund_delete($id);
	  redirect("fund/fundlist"); 
      }
      else
	  {
		$this->load->view('login');
	  }     
    }
    
    public function deletefundtype() 
	{
	  if(isset($_SESSION['username']))
	  {
	     $category = 	  $this->input->get('category');
	     $id=$this->input->get('id');
	     $query = $this->db->query("SELECT * FROM sm_maintenance WHERE category ='$category'");
		 //print_r($this->db->last_query()); 
		 $r = $query->num_rows();
		 if(!$r)
		  {
	        $this->Maintenance_model->fundtype_delete($id,$category);
	         redirect("fund/typelist");
          }
         else
         {
			  
	       echo "<script>
                  alert('NOT DELETED! Fund Type Already In Use');
                  window.location.href='typelist';
                  
                  </script>";
		 } 
		  
      }
      else
	  {
		$this->load->view('login');
	  }     
    }
    
    public function editfundtype()
    {
	  if(isset($_SESSION['username']))
	  {    
	    //$data['a'] = $this->Owner_model->get_owner();
	    $id = $this->uri->segment(3);
	    $id=$this->input->get('id');
	    $data['p'] = $this->Maintenance_model->get_fundtype_by_id($id);
	    if(empty($id))
	    {
	     echo'<script>alert("NO DATA AVAILABLE"); </script>';
	    }
		// print_r($get);
	   $this->load->view('header');
	   $this->load->view('fundtypeedit',$data);
	   $this->load->view('footer');
      }
      else
	  {
		$this->load->view('login');
	  }
	}
    
    public function updatefundtype()
     {
		$id = $this->input->post('id');
		
		$this->Maintenance_model->update_fundtype($id);
		redirect('fund/typelist');
	     
	 }
    
	 public function edit()
    {
	  if(isset($_SESSION['username']))
	  {    
	    $data['a'] = $this->Maintenance_model->get_fundtype();
	    $id = $this->uri->segment(3);
	    $id=$this->input->get('id');
	    $data['p'] = $this->Maintenance_model->get_fund_by_id($id);
	    if(empty($id))
	    {
	     echo'<script>alert("NO DATA AVAILABLE"); </script>';
	    }
		// print_r($get);
	   $this->load->view('header');
	   $this->load->view('fundedit',$data);
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
	   $category = $this->input->post('category');
	   $year = $this->input->post('year');
	   $othercategory = $this->input->post('othercategory');
	   if(!empty($category))
	   {
          $query = $this->db->query("SELECT * FROM sm_maintenance WHERE category ='$category' && year ='$year'");
	    }
	    if(!empty($othercategory))
	    {
			$query = $this->db->query("SELECT * FROM sm_maintenance WHERE category ='$othercategory' && year ='$year'");
	    }
		 //print_r($this->db->last_query()); 
		 $r = $query->num_rows();
		 if(!$r)
		  {
			  $this->Maintenance_model->update_fund($id);
		      redirect('fund/fundlist');
	     }
			   else
	     {
		     echo'<script>alert("Entry For This Category  & Year  Already Exists"); </script>';
		    //~ // $this->session->set_flashdata('maintenance','<script>alert("Flat ALready Booked");</script>');
		  }
		  
	      $data['p'] = $this->Maintenance_model->get_fundtype();
	      $this->load->view('header.php');
	      $this->load->view('fund.php',$data);
	      $this->load->view('footer.php');
	     
	 }
	 
	 public function getfundrecord()
	{
	 if(isset($_SESSION['username']))
	  {
		  
	     $mon = $this->input->get('list');
		 $year = $this->input->get('year');
		 $month = $this->Maintenance_model->get_fundlist($mon,$year);
         echo json_encode($month);
      }
      else
	  {
		$this->load->view('login');
	  }
	}
	
	
	 public function exportfund()
	 {
	    $mon = $this->input->get('mon');
	   $year = $this->input->get('year');
	   $data = $this->Maintenance_model->get_exportfunddata($mon,$year);
        //print_r($data);
       ob_clean();
	  header("Content-type:application/csv");
	  header("Content-Disposition:attachment;filename=\"fund".date('Ymd').".csv\"");
	  header("Pragma:no-cache");
	  header("Expires:0");
      $file = fopen('php://output', 'w');
      $header = array("CATEGORY","DATE","STATUS","MONTH","YEAR","AMOUNT","TOTAL"); 
      fputcsv($file, $header);
      foreach ($data as $data)
       {
         fputcsv($file, $data);
       }
         fclose($file);
      }
}
?>
