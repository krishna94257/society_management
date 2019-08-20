<?php
class Flat_model extends CI_Model
{
      Public function __construct(){
						             parent::__construct();
						             $this->load->database();
						            }
					              

    public function add()
		{
		  $floor = $this->input->post('floor');
          $flat = $this->input->post('flat');
          $wing = $this->input->post('unique_id1');
         
		   for($i=1;$i<=$floor;$i++){
			  for($j=1;$j<=$flat;$j++){
					                    $a = 0;
						                if($j<10)
						                {
										   $flat_name=$wing.$i.$a.$j;
						                   //echo$flat_name;
						                   $this->db->insert('flat',array('wing_id' => $wing,'floor_no' => $i,'flat_name' =>$flat_name));
										 }
										 else
										 {
											$flat_name=$wing.$i.$j;
						                    //echo$flat_name;
						                     $this->db->insert('flat',array('flat_name' => $flat_name));
										  }
						                }
				                  }
		}	     	
						
     public function get_flat(){
							     $q = $this->db->get('flat');
                                 return $q->result_array();
						        } 
						    
     Public function get_flat_by_id($id=0){
						                       if($id === 0){
							                                 $query = $this->db->get('wing');
                                                             return $query->result_array();
							                                 }
											//$query->db->get_where('product',array('id' = $id));
											$query = $this->db->get_where('floor', array('id' => $id));
											return $query->result_array();
						                   }
	 Public function get_flatname_by_id($id=0,$id1=0){
						                      
											//$query->db->get_where('product',array('id' = $id));
											$query = $this->db->get_where('flat', array('wing_id' => $id1,'floor_no' => $id));
											return $query->result_array();
						                   }					                   
						                   			               
						               
     Public function delete($id){
							            $this->uri->segment(3);
						    	        //$id = $this->input->post('id');
							            //echo' <script>alert($id); </script>';
							            $this -> db -> where('wing_id', $id);
                                        $this -> db -> delete('flat');
							      }	
}
?>
						
