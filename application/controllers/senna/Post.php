<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('Model');
    }

    public function new_story() 
    {
        $config['upload_path']          = './templates/img/books/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('cover'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('senna/dashboard', $error);
		}
		else
		{   
            $judul = $this->input->post('judul');
            $author = $this->input->post('author');
            $upload = $this->upload->data();
            $cover = $upload['file_name'];
            $genre = $this->input->post('genre');
            $sinopsis = $this->input->post('sinopsis');
            $status = $this->input->post('status');
		    $this->Model->new_book(array(
                'judul' => $judul,
                'author' => $author, 
                'cover' => $cover, 
                'genre' => $genre, 
                'sinopsis' => $sinopsis, 
                'status' => $status)
            );
            $book = $judul;
            $judul_chapters = "Chapter 0";
            $isi = $sinopsis;
            $type = "publish";
            $this->Model->new_chapter($book, $judul_chapters, $isi ,$type);
            redirect('senna/dashboard');
        }
    }
    
    public function edit_book(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $author = $this->input->post('author');
        $genre = $this->input->post('genre');
        $sinopsis = $this->input->post('sinopsis');
        $status =$this->input->post('status');

        $this->Model->edit_book($id,$judul,$author,$genre,$sinopsis,$status);
        redirect('senna/dashboard/detail/'.$id);
    }

    public function new_chapter($id = null){        
		$book = $this->Model;
		$data['book'] = $book->getbook();		
		$data['data'] = $book->find($id);		
        if ($this->input->method() === 'post') {						
			$chapter = [				
				'book' => $this->input->post('book'),
				'judul_chapters' => $this->input->post('judul_chapters'),				
				'isi' => $this->input->post('isi'),
				'type' => "publish"
			];
            // var_dump($chapter);exit();
			$saved = $this->Model->insert($chapter);
            if ($saved){
                $this->session->set_flashdata('message', 'Article was created');
                return redirect('senna/dashboard/detail/'.$id);
            }
		}
        $this->load->view('senna1/new_chapter', $data);
    }
}