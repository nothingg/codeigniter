<?php
class Users_model extends MY_Model{
	public $table = 'users';

	function __construct()
    {
        parent::__construct();
		
    }

	function get()
	{
		$this->db->order_by('id');
		$query = $this->db->get($this->table);
		return $query->result();
	}
	function get_row($id)
	{ 
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->row();

	}

	function save($data){
		if($data['id']){
			$this->db->where('id', $data['id']);
			$this->db->update('users' , $data);
			return $data['id'];
		}else{
			$this->db->insert('users' , $data);
			return $this->db->insert_id();
		}
	}

	function get2tb($tb)
	{
		$query = $this->db->get($tb);
		return $query->result();
	}
}

?>