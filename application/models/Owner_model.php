<?php
class Owner_model extends CI_Model
{
      Public function __construct(){
						             parent::__construct();
						             $this->load->database();
						            }
					              

     Public function add_owner($id=0){
							          $this->load->helper('url');
						              $data = array(
						                            'owner_name' => $this->input->post('ownername'),
						                            'number' => $this->input->post('mobileno'),
						                            'email' => $this->input->post('email'),
						                            'wing_id' => $this->input->post('unique_id'),
						                            'floor' => $this->input->post('floor'),
						                            'flatname' => $this->input->post('flat'),
						                            'amount' => $this->input->post('amount'),
						                           );
						              //echo$id;
						              //die;
						              if ($id == 0){
                                                     return $this->db->insert('sm_owner', $data);
                                                     } 
                                      else{
                                           $this->db->where('id', $id);
                                           return $this->db->update('sm_floor', $data);
                                           }
						  
						            }
							            
						            
     public function get_owner(){
							 $q = $this->db->get('sm_owner');
                             return $q->result_array();
						   } 
						               
						               
     Public function get_owner_by_id($id=0){
						
						    if($id === 0)
						    {
							  $query = $this->db->get('sm_owner');
                              return $query->result_array();
							}
							//$query->db->get_where('product',array('id' = $id));
							$query = $this->db->get_where('sm_owner', array('flatname' => $id));
							return $query->result_array();
						}
						
	  Public function delete($id){
							$this->uri->segment(3);
							
							
							//$id = $this->input->post('id');
							
							//echo' <script>alert($id); </script>';
							         $this -> db -> where('flatname', $id);
                                     $this -> db -> delete('sm_owner');
							     
							}
		 public function update_owner($id){
			                       $data = array(
						                         'owner_name' => $this->input->post('ownername'),
						                         'number' => $this->input->post('mobileno'),
						                         'email' => $this->input->post('email'),
						                         'amount' => $this->input->post('amount')
						                         );
						                             //  print_r($data);
						                             //  echo$id;
						                              // die;
						                              
			                              $this->db->where('id', $id);  
                                          $this->db->update('sm_owner', $data);
                                        //print_r($this->db->last_query());    
                                          
                                       
			                    }							
																		            
}
?>						            
						            	
						            
