<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Artikel_m');
		$this->load->model('Produk_m');
		$this->load->helper('text');
	}

	public function index()
	{
		$data = [
			'title' => "Home | Only Wall",
			'produk' => $this->Produk_m->getProduk(),
			'artikel' => $this->Artikel_m->getArtikel()
		];

		$this->load->view('end_user/home_view', $data);
	}

	public function showProduk()
	{
		$id_produk = decrypt_url($this->uri->segment(3));
		$data = [
			'title' => "Produk Detail | Only Wall",
			'produk' => $this->Produk_m->getProdukbyId($id_produk),
		];

		$this->load->view('end_user/showProduk_view', $data);
	}

	public function showArtikel()
	{
		$id_artikel = decrypt_url($this->uri->segment(3));
		$data = [
			'title' => "Artikel Detail | Only Wall",
			'artikel' => $this->Artikel_m->getArtikelbyId($id_artikel),
			'similar' => $this->Artikel_m->getSimilarCategory($id_artikel)
		];

		$this->load->view('end_user/showArtikel_view', $data);
	}

	public function news()
	{
		$data = [
			'title' => "News | Only Wall",
			// 'artikel' => $this->Artikel_m->getArtikel()
		];

		$this->load->library('pagination');
		$jumlah_artikel = $this->db->get('artikel_post')->num_rows();

		$config['base_url'] = base_url() . 'Home/news';
		$config['total_rows'] = $jumlah_artikel;
		$config['per_page'] = 4;
		$config["num_links"] = 3;

		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['artikel'] = $this->Artikel_m->getArtikel2($config['per_page'], $page);

		$this->load->view('end_user/news_view', $data);
	}

	public function contact()
	{
		$data = [
			'title' => "Contact | Only Wall"
		];

		$this->load->view('end_user/contact_view', $data);
	}

	public function produk()
	{
		$data = [
			'title' => "Produk | Only Wall",
			'produk' => $this->Produk_m->getProduk()
		];

		$this->load->view('end_user/produk_view', $data);
	}
}
