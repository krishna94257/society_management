<?php
class API extends CI_Controller
{
     public function __construct()
      {
			parent::__construct();
			$this->load->model('Society_model');
			$this->load->model('Flat_model');
			$this->load->model('Owner_model');
			$this->load->helper('url_helper');
			$this->load->library('session');
			 $this->load->library('form_validation');
        }
		
	public function index()
		{  
			  /* 
               $json = '{"FirstName":"Mickey","LastName":"Maddu","jsonEmail":"mickey@gmail.com","jsonPassword":"QWERqwer!@#$","jsonDob":"2014-01-01","jsonDobTime":"dobtime","jsonLocaldob":"2014-01-01T01:00","jsonSsn":"123-12-1234","jsonPhonenumber":"123-123-1234","jsonCreditcardnumber":"123412341234"}';

              extract(json_decode($json, true));

              echo $LastName;
              
              $ln = $this->input->post('LastName');
              
              if($LastName == $ln)
              {
				  echo 1;
				  }else{ echo 2; }*/
				  
			$email = $this->input->post('username');
	        $password = $this->input->post('password');
	        $que=$this->db->query("select * from sm_user where email='$email' and password='".md5($password)."'");
			$row = $que->num_rows();
			if($row)
			{
			  $this->session->set_userdata('username', '$email');
			  echo '{"success":"TRUE"}';
			}
			else
			{
			  echo '{"success":"FALSE"}';
			} 
		}
		
		public function register()
		{
			 echo validation_errors(); 
			$pass = md5($this->input->post('password'));
			  $name =  $this->input->post('name');
			  $email =  $this->input->post('email');
			  $number =  $this->input->post('number');
			  $password =  $this->input->post('password');
		    $data = array(
                            'name' => $this->input->post('name'),
		                    'email' => $this->input->post('email'),
		                    'number' => $this->input->post('number'),
		                    'password' => $pass,
		                   );
			if(!empty(($name) && ($email) && ($number) && ($password)))
			{
			   $query = $this-> db-> insert('sm_user',$data);
			   if($query)
			   {
			     echo'{"success":"TRUE"}';
			   }
			   else
			   {
			     echo'{"success":"FALSE"}';
			   }
			}
			else
			{
			  echo"FILLING All THE FIELDS IS MANDATORY";
			}
		}
		
		public function wingadd()
		{
			
		       $unique_id = $this->input->post('unique_id');
		       $name = $this->input->post('name');
		       $floor = $this->input->post('floor');
		       $flat = $this->input->post('flat');
		       if(!empty(($unique_id) && ($name) && ($floor) && ($flat)))
			   {
			      //$password = $this->input->post('password');
		            $que=$this->db->query("select * from sm_wing where unique_id='$unique_id'");
		            $row = $que->num_rows();
		            if(!$row)
		            {
		              $r = $this->Society_model->set_wing();
		              if($r)
			          {
				       echo'{"success":"TRUE"}';
			          }
			         else
			          {
			           echo'{"success":"FALSE"}';
			          }
		           }
		          else
		          {
			       echo'{"success":"FALSE","error":"Unique Id Already Exists"}';
			      }
			   }
			   else
			   {
			   echo'{"success":"FALSE","msg":"Filling All The Fields Is Mandatory"}';
			   }
	     }
	
	public function wingedit()
	{
		$unique_id = $this->input->post('unique_id');
	    $name = $this->input->post('name');
	    $floor = $this->input->post('floor');
	    $flat = $this->input->post('flat');
	    if(!empty(($unique_id) && ($name) && ($floor) && ($flat)))
	    {
		 //$id = $this->input->post('unique_id1');
		 $id = $this->input->post('unique_id');
		 $r = $this->Society_model->update_wing($id);
		  if($r)
		  {
		  echo'{"success":"TRUE"}';
		  }
		  else
		  {
		   echo'{"success":"FALSE"}';
		  }
	   }
	   else
	   {
		echo"FILLING All THE FIELDS IS MANDATORY";
	   } 
	}
	
	public function deletewing()
	{
	  $id=$this->input->get('id');
	  $r = $this->Society_model->delete($id);
	  if($r)
	  {
	  echo'{"success":"TRUE"}';
	  }
	  else
	  {
	   echo'{"success":"FALSE"}';
	  }    
   }
      
     public function winglist()
     {
	   $data['p'] = $this->Society_model->get_wing();
	   
	   $this->load->view('winglist',$data);
	  
	 }
                           
	 public function flatlist()
	 {
		  $data['p'] = $this->Flat_model->get_flat();
		  $this->load->view('flatlist',$data);
	 }
	 
	 public function owneradd()
	 {
		 $ownername = $this->input->post('ownername');
		 $number = $this->input->post('mobileno');
		 $email = $this->input->post('email');
		 $wingid = $this->input->post('unique_id');
		 $floor = $this->input->post('floor');
		 $flatname = $this->input->post('flat');
		 $amount = $this->input->post('amount');
		 if(!empty(($ownername) && ($number) && ($email) && ($wingid) && ($floor) && ($flatname) && ($amount)))
	     {
           
	       //$password = $this->input->post('password');
	       $que = $this->db->query("select * from sm_owner where flatname = '$flatname'");
	       $row = $que->num_rows();
	       if(!$row)
	       {
			// echo$this->input->post('mobileno');
			$r = $this->Owner_model->add_owner();
			if($r)
			{
			 echo'{"success":"TRUE"}';
			}
			else
			{
			 echo'{"success":"FALSE"}';
			} 
	      }
	      else
	      {
		    echo"Flat ALready Booked";
		   }
    	}
    	else
	    {
		 echo"FILLING All THE FIELDS IS MANDATORY";
	    } 
	 }
       		 	
	public function logout()
	{
	  if(session_destroy())
      {
		 $this->session->unset_userdata('username');
		 $this->session->unset_userdata('email');   
		 $this->session->unset_userdata($result);    
		 $this->session->sess_destroy();
		 redirect('Login');
        } 
	}
		
   
}
						

?>
