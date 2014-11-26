<?php
class Users extends MX_Controller {		
	function __construct()
    {
        parent::__construct();
        $this->template->set_theme('default'); // path : themes/default
		$this->template->set_layout('main'); // File Name : main.php
        $this->load->model('users_model','users');
    }

    function index()
    {
		$this->template->set('foo', 'data'); 
		$this->template->build('users', array('message' => 'Hi there!'));
    }

    function lists()
    {
		$result = $this->users->get();
		$this->template->ste('result',$result);
		$this->template->build('users');

    }
}


/* End of file ads.php */
/* Location: ./system/application/controllers/ads.php */