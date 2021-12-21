<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model');
    }

    public function index()
    {
        $data=array(
            'data' => $this->Model->getbook()
        );
		$this->load->view('senna1/index',$data);
    }

    public function detail($id = null)
	{
		if(!isset($id)) redirect('welcome');
		$book = $this->Model;
		$data['book'] = $book->getbook();
		$data['detail'] = $book->detail($id);
 		$this->load->view('senna1/detail',$data);
	}    
}