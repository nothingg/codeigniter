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

}

?>