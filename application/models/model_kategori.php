<?php 
class Model_kategori extends CI_Model{
	public function data_gitar(){
		return $this->db->get_where('tb_produk', array('kategori'=>'gitar'));
	}
	public function data_drum(){
		return $this->db->get_where('tb_produk', array('kategori'=>'drum'));
	}
	public function data_bass(){
		return $this->db->get_where('tb_produk', array('kategori'=>'bass'));
	}
	public function data_key(){
		return $this->db->get_where('tb_produk', array('kategori'=>'key'));
	}
}



 ?>