<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Model extends CI_Model {

	function upload($file , $path = './uploads/')
	{

		$config['upload_path'] = $path;
		$config['allowed_types'] = '*';
		//$config['max_size'] = '800';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
		
		$this->load->library('upload',$config);
		
		if ( ! $this->upload->do_upload('image')){
			echo $this->upload->display_errors();
		}else{
		    return $this->upload->file_name;
			 
		}
	}

}
?>