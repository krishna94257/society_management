<?php
class Flat extends CI_Controller
{
        public function __construct(){
                            parent::__construct();
                            $this->load->model('Flat_model');
                            $this->load->helper('url_helper');
                            $this->load->library('session');
                                      }
        public function index(){
			                     if(isset($_SESSION['username']))
	                              {
			                      $data['p'] = $this->Flat_model->get_flat();
			                      $this->load->view('header');
			                      $this->load->view('flatlist',$data);
			                      $this->load->view('footer');
							     }
							     else
							     {
								   $this->load->view('login');
								 }
			                      
			                   } 
		              
	    public function flatlist(){
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
?>
