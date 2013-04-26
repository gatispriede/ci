<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigation extends CI_Model {

	public $data;

	public function __construct()
	{
		parent::__construct();

	}
	public function get_values($value)
	{

		$result = $this->db->get($value, 10);
		return $result->result_array();

	}

}

/* End of file navigation.php */
/* Location: ./application/models/navigation.php */