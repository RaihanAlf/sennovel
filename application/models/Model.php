<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    private $book = "book";
    private $_table = 'chapters';

    public function getbook(){
        $query = $this->db->get('book');
        return $query->result_array();
    }

    public function new_book($data){
        $this->db->insert('book', $data);

    }
    public function new_chapter($book, $judul_chapters, $isi, $type){
        $hasil=$this->db->query("INSERT INTO chapters (book, judul_chapters, isi, type) VALUES ('$book', '$judul_chapters', '$isi', '$type')");
        return $hasil;
    }
    public function detail($id){
        $this->db->select('a.*, b.*');
        $this->db->where('id', $id);
        $this->db->from('book as a');
        $this->db->join('chapters as b', 'a.judul = b.book');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function chplist($id_chapter){
        $this->db->select('a.*, b.*');
        $this->db->where('id', $id_chapter);
        $this->db->from('book as a');
        $this->db->join('chapters as b', 'a.judul = b.book');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function read($id_chapter)
    {
        return $this->db->get_where($this->_table, ["id_chapter" => $id_chapter])->row();
    }

    public function find($id)
    {
        return $this->db->get_where($this->book, ["id" => $id])->row();
    }
    
    public function edit_book($id,$judul,$author,$genre,$sinopsis,$status){
        $hasil=$this->db->query("UPDATE book SET judul='$judul',author='$author',genre='$genre',sinopsis='$sinopsis',status='$status' WHERE id = '$id'");
        return $hasil;
    }

    public function insert($chapter)
	{
		return $this->db->insert($this->_table, $chapter);
	}
    
    // public function detail($judul){
    //     $this->db->select('*');
    //     $this->db->where('judul', $judul);
    //     $this->db->from('book');
    //     $this->db->join('chapters', 'book.id = chapters.id_book');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    // public function detail($id){
    //     return $this->db->get_where($this->book, ["id" => $id])->row();
    // }

}