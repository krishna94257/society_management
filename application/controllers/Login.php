<?php
class Login extends CI_Controller
{
     public function __construct()
                         {
                parent::__construct();
                $this->load->model('Society_model');
               $this->load->helper('url_helper');
               $this->load->library('session');
                         }
                         
	
	public function index()
	    {
			if(!isset($_POST['submit']))
			{
		      $this->load->view('login');
		    }
		    else
		    {
			  $email = $this->input->post('username');
	        $password = $this->input->post('password');
        	$que=$this->db->query("select * from sm_info where email='$email' and password='$password'");
			$row = $que->num_rows();
			if($row)
			{
			  $this->session->set_userdata('username', '$email');
			  $this->load->view('header');
			  //$this->load->view('index');
			  $this->load->view('footer');
			}
			else
			{
			$data['error']="<h3 style='color:red;font-size: inherit;'>Invalid login details</h3>";
			$this->load->view('login',$data);
			} 
			}
		    
		}
		
	
						
}
?>
