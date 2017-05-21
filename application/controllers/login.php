<?php 
defined('BASEPATH') or exit ('No direct access allowed.');
class login extends CI_Controller {


	public function index() {
		
		$data['title'] = 'fakebookPH';
		$data['url'] = base_url();
		$data['data'] = $this->session->userdata();
		$this->load->view('templates/pages/login',$data);

	}

}