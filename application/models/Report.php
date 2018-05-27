<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Model{


public function __construct(){
	parent::__construct();
	$this->load->model('report');
}
public function check_login($data_value){
	$con= "u_emailid =" . "'" . $data_value['email'] ."' AND " . "u_password =" . "'" . $data_value['pwd'] . "'";
	$this->db->select('*');
	$this->db->from('user');
	$this->db->where($con);
	$this->db->limit(1);
	// $query = $this->db->get();
	$query_check = $this->db->get();
	// return $query_check->result_array();
	// print_r($query_check->result());
	// exit();

	if ($query_check->num_rows() == 1) {
	return $query_check->result_array();
	return true;
	} else {
	return false;
	}

	// print_r($con);
	// exit();
}

public function get_records(){
	$this->db->select('*');
	$this->db->from('dashboard');
	$query = $this->db->get();
	//return $query->result(); //retuns results as object
	return $query->result_array(); //returns results as array
	//print_r($query);
	//exit();
}
public function insert_data($idata){
	$this->db->insert('dashboard', $idata);
}
}
