<?php
class Users extends MX_Controller {		
	function __construct()
    {
        parent::__construct();
        $this->template->set_theme('default'); // path : themes/default
		$this->template->set_layout('main'); // File Name : main.php
        $this->load->model('users_model','users');
        //$this->load->model('about/about_model','about');
    }

    function index()
    {
		$this->template->set('foo', 'data'); 
		$this->template->build('users', array('message' => 'Hi there!'));
    }

    function lists()
    {
		$result = $this->users->get();
		$this->template->set('result',$result);
		$this->template->build('users');
    }

    function form($id = null)
    {
        $this->template->build('form');
    }
}


/* End of file ads.php */
/* Location: ./system/application/controllers/ads.php */