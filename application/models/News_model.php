<?php
class News_model extends CI_Model
{
   Public function __construct()
   {
		parent::__construct();
		$this->load->database();
	}
	public function get_news()
	{
	  $query = $this->db->get('mp_newslist');
	  return $query->result_array();
	}
}
?>
