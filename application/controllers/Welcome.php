<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                 $this->load->model('report');
								 $this->load->helper(array('form', 'url'));
								 $this->load->library('form_validation');
        }



	public function index()
	{
		// $this->load->view('login');
		$this->login();
	}
	public function login()
	{

		// $this->load->view('login');
		// $this->data();
		if ($this->session->userdata('currently_logged_in'))
				 {
			$this->data();
		}
			else {
				// echo "Access not granted!";
				$this->load->view('login');
			}
	}




	public function check_data(){


		$this->form_validation->set_rules('email', 'Email', 'required|callback_login_check');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
				 //$this->login();
				 //$this->load->view('login');
				$this->session->set_flashdata('message', 'Incorrect User ID or Password');
				 //$this->session->set_tempdata('item','item-value',5);
				 redirect(welcome/login);
		}
		else
		{
			// $sess_data = array('email' => $this->input->post('email'),
			// 'currently_logged_in' => 1);
		// $this->session->set_userdata($sess_data);
		// print_r($sess_data);
		// $this->data();
		redirect(welcome/data);
		}
}

	public function login_check(){
		$data_value = array('email' => $this->input->post('email'),
		'pwd' => $this->input->post('password')
	 );
		if($this->report->check_login($data_value)==TRUE){
			$sess_data = array('email' => $this->input->post('email'),
			'currently_logged_in' => 1);
				$this->session->set_userdata($sess_data);
print_r($sess_data);

			return true;
		}
		else {
			$this->form_validation->set_message('login_check', "Incorrect username/password");
			return false;
		}
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

		public function logout()
    {
        $this->session->sess_destroy();
      redirect(welcome/login);
    }



}
