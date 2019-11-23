<?php 
class Kategori extends CI_Controller{
	public function gitar(){
		$data['gitar'] = $this->model_kategori->data_gitar()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('gitar', $data);
		$this->load->view('templates/footer');
	}
	public function drum(){
		$data['drum'] = $this->model_kategori->data_drum()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('drum', $data);
		$this->load->view('templates/footer');
	}
	public function bass(){
		$data['bass'] = $this->model_kategori->data_bass()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bass', $data);
		$this->load->view('templates/footer');
	}
	public function key(){
		$data['key'] = $this->model_kategori->data_key()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('key', $data);
		$this->load->view('templates/footer');
	}
}



 ?>