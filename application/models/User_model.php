<?php
class User_model extends CI_Model{
	public function _construct()
	{
		parent::_construct();

	}
	 function getData($table)
	{
		return $this->db->get($table)->result();
	}
	function setData($table,$form_data)
	{
		return $this->db->insert($table,$form_data);
	}
	function UpdateData($table,$form_data,$where)
	{
		return $this->db->where($where)->update($table,$form_data);
	}
	function DeleteData($table,$where)
	{
		return $this->db->where($where)->delete($table);
	}
}

?>
