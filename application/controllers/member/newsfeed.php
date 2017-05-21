<?php 
defined('BASEPATH') or exit ('No direct access allowed.');
class newsfeed extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])) { redirect('login'); }
	}

	public function index() {
		

		$data['title'] = 'fakebookPH';
		$data['url'] = base_url();
		$data['user_data'] = $this->model->GetInformation($_SESSION['session_id']);
		$data['data'] = $this->session->userdata();
		$data['results'] = $this->model->GetAllPost();
		$this->load->view('templates/pages/member/newsfeed',$data);

	}

}