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
        //$id = $this->users->save($_POST);
        //$this->users->save_education($_POST , $id);

        if($_FILES['image']['name']){
            //$this->gallery->delete_file($id , 'uploads/' ,'image');
            //$this->gallery->delete_file($id , 'uploads/gallery/' ,'image');
            //$this->gallery->delete_file($id , 'uploads/gallery/thumb/' ,'image');
            
            
            $fileName = $this->users->upload($_FILES['image'] , './uploads/' );
            //$this->gallery->thumb($fileName ,  './uploads/gallery/admin/' , GALLERY_ADMIN_W , GALLERY_ADMIN_H);
            //$this->gallery->thumb($fileName ,  './uploads/gallery/front/' , GALLERY_THUMB_W , GALLERY_THUMB_H);
            
            //$this->gallery->save( array('id' => $id , 'image' => $fileName ));
        }

        //redirect('users/form/'.$id);
    }

    function all2tbArr()
    {
        //$data['users'] = $this->users->get2tb('users');
        //$data['address'] = $this->users->get2tb('address');

        $data['username'] = 'bird';
        $data['password'] = '1234';

        $this->template->set('data',$data);
        $this->template->build('twotable-arr');
    }
    function all2tbObj()
    {
        $data = new stdClass;
        $data->username = 'bird';
        $data->password = '1234';

        $this->template->set('data',$data);
        $this->template->build('twotable-obj');
    }

    function all2tb()
    {
        $data['users'] = $this->users->get2tb('users');
        $data['address'] = $this->users->get2tb('address');

        $this->template->set('data',$data);
        $this->template->build('twotable');
    }

    
}


/* End of file ads.php */
/* Location: ./system/application/controllers/ads.php */