<?php 
defined('BASEPATH') or exit ('No direct access allowed.');
class execute extends CI_Controller {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Manila');
	}

	public function post($value) {
		return $this->input->post($value);
	}

	public function register() {
		$lastname 	= $this->post('lastname');
		$firstname 	= $this->post('firstname');
		$email 		= $this->post('email');
		$gender 	= $this->post('gender');
		$birthday 	= $this->post('birthday');
		$username 	= $this->post('username');
		$password 	= $this->encrypt($this->post('password'));
		$date 		= date('F j, \ Y');
		switch ($gender) {
			case 'Male':
			$image = base_url().'assets/images/male.jpg';
			break;

			case 'Female':
			$image = base_url().'assets/images/female.jpg';
			break;
			
		}

		$data = array(
			'picture' => $image, 'lastname' => $lastname, 'firstname' => $firstname,
			'email' => $email, 'gender' => $gender, 'birthday' => $birthday, 
			'username' => $username,  'password' => $password,  
			'role'=>1, 'status'=>1,'date' => $date
			);

		$result = $this->model->register($data);
		
	}

	public function login(){

		$username = $this->post('uname');
		$password = $this->post('pword');
		
		$result = $this->model->UserLogin($username, $password);

		if ($result) {
			
			$id 	 = $this->model->GetId($username);
			$user 	 = $this->model->GetUserInformation($id);
			$role 	 = $user->role;
			$picture = $user->picture;
			$newdata = array('session_id' => $id,'role' => $role,'logged_in' => TRUE);
			switch ($role) 
			{
				case 0:
				$this->session->set_userdata($newdata);
				echo 'admin';
				break;

				case 1:
				$this->session->set_userdata($newdata);
				echo 'member';
				break;
			}

		} else {
			
		echo 'error';
			
		}
		
	}

	public function post_comment($post_id) {
		$name 		= $this->post('name');
		$email 		= $this->post('email');
		$message 	= $this->post('message');
		$password 	= $this->encrypt($this->post('password'));
		$date 		= date('H:i A');

		$data = array('post_id' => $post_id, 'name' => $name, 'email' => $email,'message' => $message, 'date' => $date);

		$result = $this->model->AddNewPost($data);
		
	}

	public function logout()
	{

		unset($_SESSION['name'],$_SESSION['session_id'],$_SESSION['logged_in'],$_SESSION['role']);
		redirect('login');

	}

	private function encrypt($password) 
	{
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
}
