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

	function save($post)
	{
		$data['username'] = $post['username'];
		$data['password'] = $post['password'];
		$data['id'] = $post['id'];
		if($data['id']){
			$this->db->where('id', $data['id']);
			$this->db->update('users' , $data);
			return $data['id'];
		}else{
			$this->db->insert('users' , $data);
			return $this->db->insert_id();
		}
	}

	function save_education($post , $id)
	{
		echo debug($post);
		echo count($post['academy']);
		foreach($post['academy'] as $key => $row){
			$data['academy'] = $post['academy'][$key];
			$data['grade'] = $post['grade'][$key];
			$data['user_id'] = $id;
			$this->db->insert('education',$data);
		}

	}

	function get2tb($tb)
	{
		$query = $this->db->get($tb);
		return $query->result();
	}
}

?>