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
	public function index()
	{
		$data = [
			'title' => "Home | Only Wall"
		];

		$this->load->view('end_user/home_view', $data);
	}

	public function news()
	{
		$data = [
			'title' => "News | Only Wall"
		];

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
			'title' => "Produk | Only Wall"
		];

		$this->load->view('end_user/produk_view', $data);
	}
}
