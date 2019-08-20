<?php
class Maintenance_model extends CI_Model
{
      Public function __construct()
       {
		 parent::__construct();
		  
	    $this->load->database();
	   }
	   
	  public function add()
	  {
		 $flat = $this->input->post('flat');
		 $year =  $this->input->post('year');
		 $Specilized_category = $this->input->post('month');
		 $month_name =  implode(",", $Specilized_category);
	     $data = array
	             (
					'owner_name'=>$this->input->post('ownername'),
					'flat'=>$this->input->post('flat'),
					'status' => 'paid',
					'month'=>$month_name,
					'year'=>$this->input->post('year'),
					'type'=>'maintenance',
					'category'=>'default',
					'amount'=>$this->input->post('amount'),
					'watercharge'=>$this->input->post('watercharge'),
					'total'=>$this->input->post('total'),
	              );
	               //return$this->db->insert('maintenance',$data);
	      $query =$this->db->get_where('sm_maintenance',array('flat' => $flat,'year' => $year));
	              // print_r($this->db->last_query());
	              // print_r($query);
	              $r = $query->num_rows();
	              if($r)
	              {
					$this->db->where('flat',$flat);
					$this->db->where('year',$year);
					return$this->db->update('sm_maintenance',$data);
				  }
				 else
				 {
				  return$this->db->insert('sm_maintenance',$data);
				 }
	  }
	  					               
     Public function get_owner_by_id($id=0)
     {			   
	    if($id === 0)
        {
		  $query = $this->db->get('sm_owner');
		  return $query->result_array();
		}
		//$query->db->get_where('product',array('id' = $id));
		$query = $this->db->get_where('sm_owner', array('flatname' => $id));
		return $query->result_array();
	}
		 				
	  
    public function get_maintenance_by_id($id)
	 {
	  if($id === 0)
	  {
		  $query = $this->db->get('sm_maintenance');
		  return $query->result_array();
	   }
	  //$query->db->get_where('product',array('id' = $id));
	    $query = $this->db->get_where('sm_maintenance', array('id' => $id));
		return $query->result_array();
	  }
	  
	  public function get()
	  {
	     $query = $this->db->get('sm_maintenance');
	     return $query->result_array();
	   }
	   
	   Public function delete($id)
	   {
		$this->uri->segment(3);
		$this -> db -> where('id', $id);
		$this -> db -> delete('sm_maintenance');
	   }
	   
	  public function update($id)
	  {
		 $Specilized_category = $this->input->post('month');
		 $month_name =  implode(",", $Specilized_category);
	     $data = array
	             (
					'month'=>$month_name,
					'year'=>$this->input->post('year'),
					'amount'=>$this->input->post('amount'),
	              );
	     $this->db->where('id',$id);
	     $this->db->update('sm_maintenance',$data);
	  }	
	  
	  public function fund_add()
	  {
		 $Specilized_category = $this->input->post('month');
		 $month_name =  implode(",", $Specilized_category);
	     $data = array
	             (
	               'status' => 'paid',
	               'type' => 'others',
	               'category' => $this->input->post('type'),
	               'amount' => $this->input->post('charge'),
	               'year' => $this->input->post('year'),
	               'month' => $month_name,
	               'total' => $this->input->post('charge'),
	               'watercharge' => 0,
	               'description' => $this->input->post('description'),
	             );
	             return$this->db->insert('sm_maintenance',$data);
	  }	
	  
	  public function fund_list()
	  {
	    $query = $this->db->get_where('sm_maintenance',array('type' => 'others'));
	    return $query->result_array();
	  }	
	  
	  public function get_fund_by_id($id)
	 {
	  if($id === 0)
	  {
		  $query = $this->db->get('sm_maintenance');
		  return $query->result_array();
	   }
	  //$query->db->get_where('product',array('id' = $id));
	    $query = $this->db->get_where('sm_maintenance', array('id' => $id));
		return $query->result_array();
	  }
	  
	   Public function fund_delete($id)
	   {
		$this->uri->segment(3);
		$this -> db -> where('id', $id);
		$this -> db -> delete('sm_maintenance');
	   }
	   
	    public function get_newlist($data,$year)
	  {
		 // print_r($data['a']);
		  
		//print_r($data);
		 //$month = implode(",",$data);
		 //echo $month;
		$query = $this->db->query("select id,owner_name,flat,date,status,month,year,total 
		                           from sm_maintenance where month like '%$data%' && year='$year' && type='maintenance'");
	    //print_r($query);
	    return $query->result_array();
	   
	  }				      					            
}
?>
