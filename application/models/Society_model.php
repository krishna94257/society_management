<?php
class Society_model extends CI_Model{
   Public function __construct(){
						parent::__construct();
						$this->load->database();
						}
						
   Public function set_wing($id=0)
		{
          $this->load->helper('url');
          $floor = $this->input->post('floor');
          $flat = $this->input->post('flat');
          $wing = $this->input->post('unique_id');
           for($i=1;$i<=$floor;$i++){
			  for($j=1;$j<=$flat;$j++){
					                    $a = 0;
						                if($j<10)
						                {
										   $flat_name=$wing.$i.$a.$j;
						                   //echo$flat_name;
						                   $this->db->insert('sm_flat',array('wing_id' => $wing,'floor_no' => $i,'flat_name' =>$flat_name));
										 }
										 else
										 {
											$flat_name=$wing.$i.$j;
						                    //echo$flat_name;
						                     $this->db->insert('sm_flat',array('wing_id' => $wing,'floor_no' => $i,'flat_name' => $flat_name));
										  }
						                }
				                  }
          
          $data = array(
                      'unique_id' => $this->input->post('unique_id'),
		              'name' => $this->input->post('name'),
		              'floor' => $this->input->post('floor'),
		              'flat' => $this->input->post('flat'),
                      );
		
          if ($id == 0){
				        return $this->db->insert('sm_wing', $data);
			            //$this->db->affected_rows();
			           
				       } 
		  else {
			    $this->db->where('unique_id', $id);
		        $this->db->update('sm_wing', $data);
			   }
			 
		

		}
		
   public function update_wing($id){
			                        $data = array(
						                         'name' => $this->input->post('name'),
						                         'floor' => $this->input->post('floor'),
						                         'flat' => $this->input->post('flat')
						                         );
						                              // print_r($data);
						                              // echo$id;
						             $this->db->where('unique_id', $id);  
                                     $this->db->update('sm_wing', $data);
                                      // print_r($this->db->last_query());    
                                         
                                       
			                    }				
						
   public function get_wing(){
							 $q = $this->db->get('sm_wing');
                             return $q->result_array();
						   } 
						               
						               
 Public function get_wing_by_id($id=0){
						
						    if($id === 0)
						    {
							  $query = $this->db->get('sm_wing');
                              return $query->result_array();
							}
							//$query->db->get_where('product',array('id' = $id));
							$query = $this->db->get_where('sm_wing', array('unique_id' => $id));
							return $query->result_array();
						}
									               
  Public function delete($id){
							   $this->uri->segment(3);
							   //$id = $this->input->post('id');
							   //echo' <script>alert($id); </script>';
							   $this -> db -> where('unique_id', $id);
                               $this -> db -> delete('sm_wing');
                               $this -> db -> where('wing_id', $id);
                               $this -> db -> delete('sm_flat');
                               $this -> db -> where('wing_id', $id);
                               $this -> db -> delete('sm_owner');
							}	
							
  				               											               
			                  	
}	
						
?>					
