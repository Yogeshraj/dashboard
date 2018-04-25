<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                 $this->load->model('report');
        }



	public function index()
	{
		//$this->load->view('dashboard');``
		$this->data();
	}
	public function data()
	{
		//$data['tests']=$this->report->get_records();
		//print_r($data);
	//	$this->load->view('dashboard', $data);
		$this->load->view('dashboard');

	}

	public function get_data(){

		$data=$this->report->get_records();
		//	$result = array('data' => array());
		//print_r($data);
		//exit();
		// foreach ($data as $key => $value) {
		// 	$result['data'][$key] = array(
		// 		$value['r_no'],
		// 		$value['date'],
		// 		$value['project_name'],
		// 		$value['client_name'],
		// 		$value['billing_status'],
		// 		$value['time_taken'],
		// 		$value['comments']
		// 	);
		// }
			//print_r($result);
			//exit();
		// echo json_encode($result);
		echo json_encode(array("data_table" => $data));
		// var_dump(json_encode($data));
		// var_dump( json_last_error());
	}



	public function push_data(){
		$idata = array(
		'date' => $this->input->post('date'),
		'project_name' => $this->input->post('project_name'),
		'client_name' => $this->input->post('client_name'),
		'billing_status' => $this->input->post('billing_status'),
		'time_taken' => $this->input->post('time_taken'),
		'comments' => $this->input->post('comments'),
		);
		$this->report->insert_data($idata);
		//echo 'Data Inserted';
		//return $idata;
		//print_r($data);
		//echo json_encode($data);
		}

}
