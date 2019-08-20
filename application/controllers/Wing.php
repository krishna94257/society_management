<?php
class Wing extends CI_Controller
{
        public function __construct(){
                            parent::__construct();
                            $this->load->model('Society_model');
                             $this->load->model('Flat_model');
                            $this->load->helper('url_helper');
                            $this->load->library('session');
                            //$this->session->has_userdata('username');
                                      }
       
       
		    public function index(){
		                        // $this->Society_model->set_wing();
		                        // $this->load->view('wing');
		                        if(isset($_SESSION['username']))
		                           {
		                           $this->load->view('header');
		                           $this->load->view('wing');
		                           $this->load->view('footer');
							       }
							    else{
									    $this->load->view('login');
									}
		                      }  
		 
		                
	   public function add(){
								 if(isset($_SESSION['username']))
		                           {	   
									   $unique_id = $this->input->post('unique_id');
									   //$password = $this->input->post('password');
									   $que=$this->db->query("select * from sm_wing where unique_id='$unique_id'");
									   $row = $que->num_rows();
									   if(!$row)
									   {
									   $this->Society_model->set_wing();
									   redirect("wing/list");
									   }
									  else
									   {
										echo'<script>alert("Unique Id Already Exists"); </script>';
										}
									   $this->load->view('header');
									   $this->load->view('wing');
									   $this->load->view('footer');  
								   }
								   else
								   {
									   $this->load->view('login');
								   }     
					             }		
		                
	Public function list(){
		                          
								 if(isset($_SESSION['username']))
		                          {
		                           $data['p'] = $this->Society_model->get_wing();
                                   if (empty($data))
							       {
									  $this->load->view('pages/header');
									  $this->load->view('pages/productlist');
									  $this->load->view('pages/footer'); 
							        }
						            $this->load->view('header');
									$this->load->view('winglist',$data);
									$this->load->view('footer');
								  }
								 else
								  {
									  $this->load->view('login');
								  }
                              	}
     Public function winglist(){
		                         $id = $this->input->post('id');
		                         
		                          $data['p'] = $this->Society_model->get_wing_by_id($id);
		                            
		                          $this->load->view('getowner',$data);
                              	}	                         		
					
  public function delete(){
							  $id=$this->input->get('id');
							  $this->Society_model->delete($id);
							  redirect("wing/list");      
                           }
                    
  public function edit(){    
	                     $id = $this->uri->segment(3);
					     $id=$this->input->get('id');
						 $data['p'] = $this->Society_model->get_wing_by_id($id);
						 if(empty($id))
		                  {
							 show_404();
						  }
						 
						$this->load->view('header');
						$this->load->view('edit',$data);
						$this->load->view('footer');
				        }
		          
  public function update(){
				            $id = $this->input->post('unique_id1');
				            $id1 = $this->input->post('unique_id');
							$this->Society_model->update_wing($id);
							$this->Flat_model->delete($id);
						    $this->Flat_model->add();
                            redirect( base_url() . 'wing/list');
                            
						    }                            
 }
?>
