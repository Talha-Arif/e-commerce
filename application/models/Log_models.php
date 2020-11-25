<?php
/**
 * 
 */
class Log_models extends CI_model
{
	
	function user($result)
	{
		$sql = 'SELECT * FROM login where email=? and password=?';
		$query = $this->db->query($sql,array($result['email'],$result['password']));
		return $query->result();
	}
	function tbldata()
	{
		$sql = 'SELECT * FROM question ';
		$query = $this->db->query($sql);
		return $query->result();
	}
	function add_question($data)
	{
		$this->db->insert('question',$data);
		
	}
	function description($result)
	{
		$sql = 'SELECT * FROM question where id = ?';
		$query = $this->db->query($sql,$result);
		
		return $query->result();
	}
	function updat($result)
	{
		
		$this->db->where('id',$result['id']);
		$this->db->update('question',$result);
		return true;
	}
	function list()
	{
		$sql = 'SELECT * FROM countries';
		$query= $this->db->query($sql);
		return $query->result();
	}
	function add_countries($data)
	{
		$this->db->insert('countries',$data);
	}
	function edit_countires($data)
	{
		$sql = 'SELECT * FROM countries where id = ?';
		$query = $this->db->query($sql,$data);
		return $query->result();

	}
	function updat_country($result)
	{
		
		$this->db->where('id',$result['id']);
		$this->db->update('countries',$result);
		return true;
	}
	function check($data)
	{
		$sql = 'SELECT * FROM countries where countries = ?';
		$query = $this->db->query($sql,$data);
		return $query->result();
	}
}

?>