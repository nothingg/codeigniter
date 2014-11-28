<?php
class Register_model extends MY_Model{
	public $table = 'cuse_register_acc';

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
		$query = $this->db->get('cuse_register_acc');
		return $query->row();

	}

	function saveRegis(){
		$data['regis_id'] = substr(com_create_guid(),1,-1);
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);
		$data['activate_code'] = $_POST['activate_code'];
		$this->db->insert('cuse_register_acc' , $data);
		return $this->db->insert_id();
	}

	function getGeneral($id){
		$this->db->where('regis_id',$id);
		$query = $this->db->get('cuse_register_acc', 'cuse_register_info');
		return $query->row();
	}
}

?>