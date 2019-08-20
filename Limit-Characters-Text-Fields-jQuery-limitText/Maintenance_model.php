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
		     //print_r (str_split($flat)[0]);
		 $year =  $this->input->post('year');
		 $Specilized_category = $this->input->post('month');
		 $month_name =  implode(",", $Specilized_category);
	     $data = array
	             (
					'owner_name'=>$this->input->post('ownername'),
					'wing_name'=>str_split($flat)[0],
					'flat'=>$this->input->post('flat'),
					'status' => 'Paid',
					'month'=>$month_name,
					'year'=>$this->input->post('year'),
					'type'=>'maintenance',
					'category'=>'default',
					'amount'=>$this->input->post('amount'),
					'watercharge'=>$this->input->post('watercharge'),
					'total'=>$this->input->post('total'),
	              );
	               return$this->db->insert('sm_maintenance',$data);
	      //~ $query =$this->db->get_where('sm_maintenance',array('flat' => $flat,'year' => $year));
	               //~ print_r($this->db->last_query());
	              //~ print_r($query);
	             //~ $r = $query->num_rows();
	              //~ if($r)
	              //~ {
					 //~ echo'<script>alert("Entry For This Flat And Year Already Exits"); </script>';
					  //~ $this->session->set_flashdata('maintenance','<script>alert("Flat ALready Booked");</script>');
					//~ $this->db->where('flat',$flat);
					//~ $this->db->where('year',$year);
					//~ return$this->db->update('sm_maintenance',$data);
				  //~ }
				 //~ else
				 //~ {
				  //~ return$this->db->insert('sm_maintenance',$data);
				 //~ }
	  }
	  
	  public function fund_type()
	  {
	    $fundtype = $this->input->post('category');
	    $description = $this->input->post('description');
	    return$this->db->insert('sm_fund',array('fundtype' => $fundtype,'description'=>$description));
	    
	  }
	 
	  public function get_fundtype()
	  {
	    $query = $this->db->get('sm_fund');
		  return $query->result_array();
	  }
	  
	  public function fundtype_delete($id)
	  {
		  
	   $this->uri->segment(3);
		$this -> db -> where('id', $id);
		$this -> db -> delete('sm_fund');
	  }
	 
	 public function get_fundtype_by_id($id)
	 {
	   $query = $this->db->get_where('sm_fund', array('id' => $id));
		return $query->result_array();
	 } 	
	 
	 public function update_fundtype($id)
	 {
		 
		$fundtype = $this->input->post('fundtype');
	    $description = $this->input->post('description');
	    $this->db->where('id',$id);
		return $this->db->update('sm_fund',array('fundtype' => $fundtype,'description' => $description));
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
		 $this->db->order_by("date", "desc");
	     $query = $this->db->get('sm_maintenance');
	     return $query->result_array();
	   }
	   
	    public function get_m()
	  {
		  $this->db->order_by("date", "desc");
	     $query = $this->db->get_where('sm_maintenance',array('type'=>'maintenance'));
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
					'watercharge'=>$this->input->post('watercharge'),
					'total'=>$this->input->post('total'),
	              );
	     $this->db->where('id',$id);
	     $this->db->update('sm_maintenance',$data);
	  }	
	  
	  public function fund_add()
	  {
		 $Specilized_category = $this->input->post('month');
		 $month_name =  implode(",", $Specilized_category);
		 $othercategory = $this->input->post('othercategory');
		 $category = $this->input->post('category');
		 $year = $this->input->post('year');
	     if(!empty($category))
	    {
		   $data = array
	             (
	               'status' => 'Paid',
	               'type' => 'others',
	               'category' => $this->input->post('category'),
	               'amount' => $this->input->post('charge'),
	               'year' => $this->input->post('year'),
	               'month' => $month_name,
	               'total' => $this->input->post('charge'),
	               'watercharge' => 0,
	               'description' => $this->input->post('description'),
	             );
		}
		if(!empty(($category) && ($othercategory)))
		{
		    $data = array
	             (
	               'status' => 'Paid',
	               'type' => 'others',
	               'category' => $othercategory,
	               'amount' => $this->input->post('charge'),
	               'year' => $this->input->post('year'),
	               'month' => $month_name,
	               'total' => $this->input->post('charge'),
	               'watercharge' => 0,
	               'description' => $this->input->post('description'),
	             );
		}
	             
	        return$this->db->insert('sm_maintenance',$data);
	             
	  }	
	  
	  public function fund_list()
	  {
		$this->db->order_by("date", "desc");
	    $query = $this->db->get_where('sm_maintenance',array('type' => 'others'));
	    return $query->result_array();
	  }	
	  
	  public function year_list()
	  {
		 $year = date("Y"); 
		  $this->db->order_by("date", "desc");
	    $query = $this->db->get_where('sm_maintenance',array('year' => $year));
	   //print_r($this->db->last_query());
	    return $query->result_array();
	  }
	  	
	   public function month_list()
	   {
		 $month = date("M");
		 $year = date("Y");
		   
	     $q =$this->db->query("SELECT * from sm_maintenance WHERE FIND_IN_SET('$month',month) && year = $year ORDER BY date desc");
	     //print_r($this->db->last_query());
	     return $q->result_array();  
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
	   
	   public function update_fund($id)
	  {
		  $Specilized_category = $this->input->post('month');
		 $month_name =  implode(",", $Specilized_category);
		 $othercategory = $this->input->post('othercategory');
		 $category = $this->input->post('category');
		 $year = $this->input->post('year');
	     if(!empty($category))
	    {
		   $data = array
	             (
	               'status' => 'Paid',
	               'type' => 'others',
	               'category' => $this->input->post('category'),
	               'amount' => $this->input->post('charge'),
	               'year' => $this->input->post('year'),
	               'month' => $month_name,
	               'total' => $this->input->post('charge'),
	               'watercharge' => 0,
	               'description' => $this->input->post('description'),
	             );
		}
		if(!empty(($category) && ($othercategory)))
		{
		    $data = array
	             (
	               'status' => 'Paid',
	               'type' => 'others',
	               'category' => $othercategory,
	               'amount' => $this->input->post('charge'),
	               'year' => $this->input->post('year'),
	               'month' => $month_name,
	               'total' => $this->input->post('charge'),
	               'watercharge' => 0,
	               'description' => $this->input->post('description'),
	             );
		}
	     $this->db->where('id',$id);
	     $this->db->update('sm_maintenance',$data);
	  }	
	  public function month_duelist()
	  {
	     $month = date("M");
		 $year = date("Y");  
		  $this->db->order_by("date", "desc");
	     $q =$this->db->query("SELECT * from sm_maintenance WHERE NOT FIND_IN_SET('$month',month) && year = $year");
	     //print_r($this->db->last_query());
	     return $q->result_array();
	  }	
	  
	  public function year_duelist()
	  {
	     $year = date("Y"); 
	     $month = 'january,february,march,april,may,june.july,august,september,october,november,december';
	     $q = $this->db->query("SELECT * FROM sm_maintenance WHERE year = $year ORDER BY date desc");
         return $q->result_array();
	  }	
	  
	  public function get_newlist($data,$year)
	  {
		 if(!empty(($data)&&($year)))
		 {
		   $query = $this->db->query("select id,owner_name,flat,date,status,month,year,amount,watercharge,total 
		                           from sm_maintenance where month like '%$data%' && year='$year' && type='maintenance'");
		  } 
		  else
		  {
			 $query = $this->db->query("select id,owner_name,flat,date,status,month,year,amount,watercharge,total 
		                           from sm_maintenance where type='maintenance'");
		  } 
		  
		  if((empty($data))&&(!empty($year)))
		  {
		    $query = $this->db->query("select id,owner_name,flat,date,status,month,year,amount,watercharge,total 
		                           from sm_maintenance where year='$year' && type='maintenance'");
		  }  
		   if((empty($year))&&(!empty($data)))
		  {
		    $query = $this->db->query("select id,owner_name,flat,date,status,month,year,amount,watercharge,total 
		                           from sm_maintenance where FIND_IN_SET('$data',month) && type='maintenance'");
		  }                      
	    //print_r($query);
	    return $query->result_array();
	   
	  }		
	   public function get_fundlist($mon,$year)
	  {
		 if(!empty(($mon)&&($year)))
		 {
		   $query = $this->db->query("select id,category,date,status,year,month,amount,total 
		                              from sm_maintenance where FIND_IN_SET('$mon',month) && year='$year' && type='others'");
		  } 
		  
		 else
		  {
			 $query = $this->db->query("select id,category,date,status,year,month,amount,total 
		                                from sm_maintenance where type='others'");
		  } 
		  
		   if((empty($mon))&&(!empty($year)))
		  {
		    $query = $this->db->query("select id,category,date,status,year,month,amount,total 
		                               from sm_maintenance where year='$year' && type='others'");
		  } 
		   
		  if((empty($year))&&(!empty($mon)))
		  {
		    $query = $this->db->query("select id,category,date,status,year,month,amount,total 
		                               from sm_maintenance where FIND_IN_SET('$mon',month) && type='others'");
		  }     
	    //print_r($query);
	    return $query->result_array();
	   
	  }	
	  
	  public function get_exportdata($mon,$year)
	  {
		 
		  $this->db->order_by("date", "desc");
		  if(!empty(($mon)&&($year)))
		  {
	       $query = $this->db->query("SELECT owner_name,flat,date,status,month,year,amount,watercharge,total FROM sm_maintenance WHERE FIND_IN_SET('$mon',month) && type= 'maintenance' && year='$year' " );
	      }
	      else
	      {
		    $query = $this->db->query("SELECT owner_name,flat,date,status,month,year,amount,watercharge,total FROM sm_maintenance where type='maintenance'" );
		  }
		  if((empty($mon))&&(!empty($year)))
		  {
		    $query = $this->db->query("select owner_name,flat,date,status,month,year,amount,watercharge,total 
		                           from sm_maintenance where year='$year' && type='maintenance'");
		  }  
		   if((empty($year))&&(!empty($mon)))
		  {
		    $query = $this->db->query("select owner_name,flat,date,status,month,year,amount,watercharge,total 
		                           from sm_maintenance where FIND_IN_SET('$mon',month) && type='maintenance'");
		  }    
	     //print_r($this->db->last_query());
	    return $query->result_array();
	   }
	   public function get_exportfunddata($mon,$year)
	  {
		  $this->db->order_by("date", "desc");
	    
	      //print_r($this->db->last_query());
	      if(!empty(($mon)&&($year)))
		  {
	       $query = $this->db->query("SELECT category,date,status,month,year,amount,total
	                                  FROM sm_maintenance WHERE FIND_IN_SET('$mon',month) && type= 'others' && year='$year' " );
	      }
	      else
	      {
		    $query = $this->db->query("SELECT category,date,status,month,year,amount,total FROM sm_maintenance where type='others'" );
		  }
		  if((empty($mon))&&(!empty($year)))
		  {
		    $query = $this->db->query("select category,date,status,month,year,amount,total
		                           from sm_maintenance where year='$year' && type='others'");
		  }  
		   if((empty($year))&&(!empty($mon)))
		  {
		    $query = $this->db->query("select category,date,status,month,year,amount,total 
		                               from sm_maintenance where FIND_IN_SET('$mon',month) && type='others'");
		  }   
	     return $query->result_array();
	   }
	   
	    public function exportyear_duelist()
	    {
			 $year = date("Y"); 
			 $month = 'january,february,march,april,may,june.july,august,september,october,november,december';
			  $q1 = $this->db->query("SELECT * FROM sm_maintenance WHERE year = $year ORDER BY date desc");
			  	 $row1 =  $q1->result_array();
			 $q = $this->db->query("SELECT id,owner_name,flat,date,year,month,category,amount,watercharge,total FROM sm_maintenance WHERE year = $year ORDER BY date desc");
			return $q->result_array();
		}	
	    
	    public function exportmonth_duelist()
	    {
		   $month = date("M");
		 $year = date("Y");  
		  $this->db->order_by("date", "desc");
	     $q =$this->db->query("SELECT id,owner_name,flat,date,year,month,category,amount,watercharge,total from sm_maintenance WHERE NOT FIND_IN_SET('$month',month) && year = $year");
	     //print_r($this->db->last_query());
	     return $q->result_array();
		}		      						      					            
}
?>
