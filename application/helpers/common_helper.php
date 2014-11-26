<?php
		
	function login($username,$password)
	{
		$CI =& get_instance();
		$sql = "SELECT users.id FROM users WHERE username = '$username' and password = '$password' ";
		$id = $CI->db->query($sql)->row_array();
		
		if($id)
		{
			$CI->session->set_userdata('id',$id['id']);
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function is_login()
	{
		$CI =& get_instance();
		$session = $CI->session->userdata('id');
		
		if($session){
			return TRUE;
		}else{
			$CI->session->set_flashdata('item', 'error');
			$CI->session->set_flashdata('message', PLZ_LOGIN);
			redirect('admin');
		}	
	}
	
	function login_data($field)
	{
		$CI =& get_instance();
		$session = $CI->session->userdata('id');
	   
		$sql = "SELECT $field FROM users WHERE users.id = ".$session['id'];
		
		$id = $CI->db->query($sql)->row_array();;
		
	   return $id[$field];
		
	}
	function logout()
	{
		$CI =& get_instance();
		$CI->session->sess_destroy();
	}
	function debug($var = null)
	{
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}
	function flashdata($type , $msg)
	{
		$CI =& get_instance();
		if($type == 'success'){
			$CI->session->set_flashdata('item', 'success');
			$CI->session->set_flashdata('message', $msg);
		}else{
			$CI->session->set_flashdata('item', 'error');
			$CI->session->set_flashdata('message', $msg);
		}
			
	}
	
?>