<?php
class Login extends MX_Controller {
    public $userid = 'user';		
	function __construct()
    {
        parent::__construct();
        $this->template->set_theme('default'); // path : themes/default
		$this->template->set_layout('main'); // File Name : main.php
        $this->load->model('login_model','login');
        //$this->load->model('about/about_model','about');
    }
    

   
    function index()
    {
        echo $this->userid;
		
		$this->template->build('login');
    }
    function check()
    {
        $this->login->check($_post);
    }

    
    
}


/* End of file ads.php */
/* Location: ./system/application/controllers/ads.php */