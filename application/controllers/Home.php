<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		// Ambil konfigurasi
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		
		// Ambil kategori
		$this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
		
		// Ambil caraousel
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		// Ambil detail konten berdasarkan slug
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();

		// Kirim data ke view
		$data = array(
			'judul'		=> "Beranda",
			'konfig'	=>	$konfig,
			'kategori'  =>	$kategori,
			'caraousel' =>	$caraousel,
			'konten'	=>	$konten

		);
		// load view
		$this->template->load('template_front','user/beranda',$data);
	}
	public function artikel($id) {
		// Ambil konfigurasi
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
	
		// Ambil daftar kategori
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
	
		// Ambil detail konten berdasarkan slug
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
		$this->db->join('user c', 'a.username = c.username', 'left');
		$this->db->where('slug', $id);
		$konten = $this->db->get()->row();
	
		// Cek apakah konten ditemukan
		if (!$konten) {
			show_404(); // Tampilkan halaman 404 jika konten tidak ditemukan
		}
	
		// Ambil artikel terkait berdasarkan kategori yang sama
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
		$this->db->where('a.id_kategori', $konten->id_kategori); // Sama kategori
		$this->db->where('a.id_konten !=', $konten->id_konten); // Kecualikan konten ini
		$this->db->limit(3); // Maksimal 5 artikel
		$related = $this->db->get()->result_array();
	
		// Kirim data ke view
		$data = array(
			'judul'     => "Detail",
			'konfig'    => $konfig,
			'kategori'  => $kategori,
			'konten'    => $konten,
			'related'   => $related, // Artikel terkait
		);
		// load view
		$this->template->load('template_front', 'user/detail', $data);
	}
	}
