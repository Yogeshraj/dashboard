<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Model{


	  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model('report');
        }

        public function get_records()
	{
		$this->db->select('*');
		$this->db->from('dashboard');
		 $query = $this->db->get();
  		//return $query->result(); //retuns results as object
              return $query->result_array(); //returns results as array
  		//print_r($query);
  		//exit();
	}

}
