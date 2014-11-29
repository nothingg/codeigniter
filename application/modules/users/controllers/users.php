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

    /*
    function index()
    {
		$this->template->set('foo', 'data'); 
		$this->template->build('users', array('message' => 'Hi there!'));
    }
    */
    function index()
    {
		$result = $this->users->get();
		$this->template->set('result',$result);
		$this->template->build('users');
    }

    function form($id = null)
    {
        if($id != null){
            $result = $this->users->get_row($id);
            $this->template->set('result',$result);
        }
        $this->template->build('form');
    }

    function save()
    {
        //debug($_POST);
        $id = $this->users->save($_POST);
        redirect('users/form/'.$id);
    }

    function all2tb()
    {
        //$data['users'] = $this->users->get2tb('users');
        //$data['address'] = $this->users->get2tb('address');

        $data['username'] = 'bird';
        $data['password'] = '1234';

        $this->template->set('data',$data);
        $this->template->build('twotable');
    }

    
}


/* End of file ads.php */
/* Location: ./system/application/controllers/ads.php */