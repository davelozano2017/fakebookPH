<?php 
defined('BASEPATH') or exit ('No direct access allowed.');
class modify extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])) { redirect('login'); }
	}

	public function edit($post_id) {
		

		$data['title'] = 'fakebookPH';
		$data['url'] = base_url();
		$data['user_data'] = $this->model->GetInformation($_SESSION['session_id']);
		$data['data'] = $this->session->userdata();
		$data['results'] = $this->model->GetPostByPostedId($post_id);
		$this->load->view('templates/components/header',$data);
		$this->load->view('templates/pages/member/modify',$data);
		$this->load->view('templates/components/footer',$data);

	}

}