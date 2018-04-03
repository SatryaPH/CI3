<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCTRL extends CI_Controller {

	
	public function home(){
		redirect(base_url().'pegawai/1');
		// $data['title'] = "Home";
		// $data['biodata_array'] = $this->M__db->query("SELECT * FROM biodata")->result_array();
		// $data['biodata_object'] = $this->M__db->query("SELECT * FROM biodata")->result();
		// $data['biodatabuilder_array'] = $this->M__db->get_all("biodata")->result_array();
		// $data['biodatabuilder_object'] = $this->M__db->get_all("biodata")->result();
		// $data['content'] = "Public/home.php";	
		// $this->load->view('Template', $data);
	}

	public function news()
	{
		$data['title'] = "News";
		$data['content'] = "Public/news.php";	
		$this->load->view('Template', $data);
	}

	public function about()
	{
		$data['title'] = "About";
		$data['content'] = "Public/about.php";	
		$this->load->view('Template', $data);
	}

	public function contact()
	{
		$data['title'] = "Contact";
		$data['content'] = "Public/contact.php";	
		$this->load->view('Template', $data);
	}
}
