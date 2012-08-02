<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buss_preference extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function get_preference()
	{
		$data = array();
		
		$this->db->select('sassess, predcomp');
		
		$q = $this->db->get('buss_preference');
		
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$data = $row;
			}
		}
	
		return $data;
		
		$q->free_result();
		
	}
	
	function add_buss_preference($data)
	{
		$this->db->insert('buss_preference', $data);	
	}
	
	function update_buss_preference($data, $lgucode)
	{
		$this->db->where('lgucode', $lgucode);
		$this->db->update('buss_preference', $data);
	}
	
	function get_field($field)
	{
		$data = '';
		
		$this->db->select($field);
		
		$q = $this->db->get('buss_preference');
		
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$data = $row[$field];
			}
		}
	
		return $data;
		
		$q->free_result();
		
	}
	
	
	
}
