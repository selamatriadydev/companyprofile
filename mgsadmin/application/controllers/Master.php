<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

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
		$this->load->view('admin/app/header');
		$this->load->view('admin/app/nav');
		$this->load->view('admin/support/support');
		$this->load->view('admin/app/footer');
	}

	public function support()
	{	
		$this->load->view('admin/app/header');
		$this->load->view('admin/app/nav');
		$this->load->view('admin/support/support');
		$this->load->view('admin/app/footer');
	}

	public function tentang()
	{	
		$this->load->view('admin/app/header');
		$this->load->view('admin/app/nav');
		$this->load->view('admin/tentangkami/tentang');
		$this->load->view('admin/app/footer');
	}

	public function profil()
	{	
		$this->load->view('admin/app/header');
		$this->load->view('admin/app/nav');
		$this->load->view('admin/kontak/kontak');
		$this->load->view('admin/app/footer');
	}

	public function klien()
	{	
		$this->load->view('admin/app/header');
		$this->load->view('admin/app/nav');
		$this->load->view('admin/klien/klien');
		$this->load->view('admin/app/footer');
	}

	public function pembayaran()
	{	
		$this->load->view('admin/app/header');
		$this->load->view('admin/app/nav');
		$this->load->view('admin/pembayaran/pembayaran');
		$this->load->view('admin/app/footer');
	}

	public function pengiriman()
	{	
		$this->load->view('admin/app/header');
		$this->load->view('admin/app/nav');
		$this->load->view('admin/pengiriman/pengiriman');
		$this->load->view('admin/app/footer');
	}

}
