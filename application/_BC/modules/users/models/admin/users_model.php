<?php
class Users_model extends MY_Model {
	
	public $table = 'users';
    function __construct()
    {
        parent::__construct();
		
    }
	
	function get_row($id = null)
	{
		$this->db->where('id',$id);
		$query = $this->db->get($this->table);
		return $query->row();
	}
}
?>