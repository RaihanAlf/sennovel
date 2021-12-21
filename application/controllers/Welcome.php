<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Model');
	}

	public function index()
	{
		$data=array(
            'data' => $this->Model->getbook()
        );
		$this->load->view('home',$data);
	}

	public function detail($id = null)
	{
		if(!isset($id)) redirect('welcome');
		$book = $this->Model;
		// $data['book'] = $book->getbook();
		$data['data'] = $book->detail($id);
		$this->load->view('detail',$data);
		// var_dump($data['data']);exit();
		// $data['chapters'] = $book->
		// var_dump($id);exit();
		// $data['judul'] = $judul;
		// $data['book'] = $this->Model->detail($judul);
	}

	public function read($id_chapter)
	{
		$data['data'] = $this->Model->chplist($id_chapter);
		$data['chapters'] = $this->Model->read($id_chapter);
		$this->load->view('read', $data);
	}	

}
