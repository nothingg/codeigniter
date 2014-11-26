<?php
class Admin extends MX_Controller {		
	function __construct()
    {
        parent::__construct();
		is_login();
		$this->load->model('admin/users_model','users');
		$this->template->set_template('admin');
    }

	
	function form($id = null)
	{
		
		$data['result'] = NULL;
		if($id != NULL){
			$data['result'] = $this->users->get_row($id);	
		}
		
		$this->template->write_view('content', 'admin/form',$data);
		$this->template->render();
	}
	function save()
	{
		$_POST['password'] = md5($_POST['password']);
		
		$id = $this->users->save($_POST);
		if($id){
			$this->session->set_flashdata('item', 'success');
			$this->session->set_flashdata('message', SUCCESS_SAVE_DATA);
		}else{
			$this->session->set_flashdata('item', 'error');
			$this->session->set_flashdata('message', FAIL_SAVE_DATA);
		}
		redirect('users/admin/form/'.@$id);
		
	}
	
	
}

/* End of file ads.php */
/* Location: ./system/application/controllers/ads.php */

