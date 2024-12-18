<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function index()
	{
		// Ambil konfigurasi
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		
		// Ambil kategori
		$this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
		
		// Ambil Galeri
		$this->db->from('galeri');
		$galeri = $this->db->get()->result_array();

		
		// Kirim data ke view
		$data = array(
			'judul'		=> "Galeri",
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
			'galeri' =>	$galeri,

		);
		// // load view
		$this->template->load('template_front','user/galeri',$data);
    }
}