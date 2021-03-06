<?php
class Register extends MX_Controller {		
	function __construct()
    {
        parent::__construct();
        $this->template->set_theme('default'); // path : themes/default
		$this->template->set_layout('main'); // File Name : main.php
        $this->load->model('register_model','register');
        //$this->load->model('about/about_model','about');
    }

    /*
    function index()
    {
		$this->template->set('foo', 'data'); 
		$this->template->build('users', array('message' => 'Hi there!'));
    }
    */
    function index()
    {
		$result = $this->register->get();
		$this->template->set('result',$result);
		$this->template->build('register');
    }

    function form($id = null)
    {
        if($id != null){
            $result = $this->register->get_row($id);
            $this->template->set('result',$result);
        }
        $this->template->build('register');
    }

    function saveRegis()
    {
        //debug($_POST);
        $id = $this->register->saveRegis($_POST);
        redirect('register/register/');
    }

	function general($id = null)
	{
		if($id != null){
			$result = $this->register->getGeneral($id);
			$this->template->set('result',$result);
		}
		$this->template->build('general');
	}

    
}


/* End of file ads.php */
/* Location: ./system/application/controllers/ads.php */