<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property CI_Input $input
 * @property M_siswa $m_siswa
 */
class Admin extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['meta'] = [
			'title' => 'Home'
		];
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer',$data);
	}

	public function siswa(){
		$this->load->model('m_siswa'); // Load the model
		$data['siswa'] = $this->m_siswa->get_data_siswa();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('siswa',$data);
		$this->load->view('templates/footer');
	}

	public function about()		
	{
		$data['meta'] = [
			'title' => 'About Us'
		];
		$this->load->view('about.php',$data);
	}
	public function contact()		
	{
		if($this->input->method() == 'post'){ //cek apakah methodnya post
			print_r($this->input->post());
		}
		
		$data['meta'] = [
			'title' => 'Contact Us'
		];

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar.php',$data);
		$this->load->view('contact.php');
		$this->load->view('templates/footer.php',$data);
	}
}


