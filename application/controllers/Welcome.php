<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                 $this->load->model('Report');
        }



	public function index()
	{
		//$this->load->view('dashboard');
		$this->data();
	}
	public function data()
	{
		$data['tests']=$this->report->get_records();
		//print_r($data);
		$this->load->view('dashboard', $data);

	}

}
