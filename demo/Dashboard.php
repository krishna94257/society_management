<?php
class Dashboard extends CI_Controller
{
   public function __construct()
   {
	  parent::__construct();
	  $this->load->model('Maintenance_model');
	  $this->load->model('Flat_model');
	  $this->load->model('Owner_model');
	  $this->load->library('session');
	  $this->load->helper('url_helper');
	  $this->load->database();
	}
	public function index()
	{
	  if(isset($_SESSION['username']))
	  {	
	     $data['p'] = $this->Maintenance_model->get();
	     $data['a'] = $this->Maintenance_model->get_m();
	     $data['b'] = $this->Maintenance_model->fund_list();
	     $data['c'] = $this->Maintenance_model->year_list();
	     $data['d'] = $this->Maintenance_model->month_list();
	     $data['e'] = $this->Maintenance_model->month_duelist();
	     $data['yeardue'] = $this->Maintenance_model->year_duelist();
	     // print_r($data['yech']);
	     //print_r($arr);
	    $this->load->view('header');
	    $this->load->view('dashbord',$data);
	    $this->load->view('footer');
      }
      else
	  {
	   $this->load->view('login');
	  }
	}
}
