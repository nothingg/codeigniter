<?php
class Users_model extends CI_Model {
	
	public $table = 'users';
    function __construct()
    {
        parent::__construct();
		
    }
	function get_all()
	{
		$query = $this->db->order_by('id')
						  ->get($this->table);
		return $query->result();
	}
	
	function get_row($id = null)
	{
		$this->db->where('id',$id);
		$query = $this->db->get($this->table);
		return $query->row();
	}
}
?>