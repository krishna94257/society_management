<?php
class Logout extends CI_Controller
{
        public function __construct(){
                            parent::__construct();
                            $this->load->model('Flat_model');
                            $this->load->helper('url_helper');
                                      }
        public function index(){
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
