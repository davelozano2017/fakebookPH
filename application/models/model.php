<?php 
defined('BASEPATH') or exit ('No direct access allowed.');
class model extends CI_Model {


	public function register($data) {

		$check = $this->db->select('email')->from('f_account_tbl')->where(array('email' => $data['email']))->get();
		if($check->num_rows() > 0)
		{

			echo 'duplicated';
			return $check;

		} else {

			$result = $this->db->insert('f_account_tbl',$data);
			echo 'success';
			return $result;
		
		}

	}

	public function AddNewPost($data) {

		$result = $this->db->insert('f_newsfeed_tbl',$data);
		echo 'success';
		return $result;
		
	}

	public function GetId($username) 
	{
		
		$this->db->select('id')->from('f_account_tbl')->where('username', $username);
		return $this->db->get()->row('id');
		
	}

	public function GetUserInformation($user_id) 
	{
		
		$this->db->from('f_account_tbl')->where('id', $user_id);
		return $this->db->get()->row();
		
	}

	public function GetAllPost() {

		$this->db->select(
			'f_account_tbl.picture, f_account_tbl.email, f_newsfeed_tbl.name,
			 f_newsfeed_tbl.post_id, f_newsfeed_tbl.email, f_newsfeed_tbl.message,
			 f_newsfeed_tbl.likes, f_newsfeed_tbl.date, f_newsfeed_tbl.id'
			)->from('f_account_tbl')->join('f_newsfeed_tbl','f_account_tbl.email = f_newsfeed_tbl.email');
		$result = $this->db->get();
		return $result->result();
	}

	public function GetPostByPostedId($post_id) {

		$this->db->select(
			'f_account_tbl.picture, f_account_tbl.email, f_newsfeed_tbl.name,
			 f_newsfeed_tbl.post_id, f_newsfeed_tbl.email, f_newsfeed_tbl.message,
			 f_newsfeed_tbl.likes, f_newsfeed_tbl.date, f_newsfeed_tbl.id'
			)->from('f_account_tbl')->join('f_newsfeed_tbl','f_account_tbl.email = f_newsfeed_tbl.email');
		$this->db->where(['f_newsfeed_tbl.post_id'=>$post_id]);
		$result = $this->db->get();
		return $result->result();

	}

	public function UserLogin($username,$password)
	{

		$this->db->select('password')->from('f_account_tbl')->where('username', $username);
		$hash = $this->db->get()->row('password');
		return $this->verify($password, $hash);

	}

	public function GetInformation($id)
	{

		$result = $this->db->where(['id'=>$id])->get('f_account_tbl');
		return $result->result();

	}

	private function verify($password, $hash) {
		
		return password_verify($password, $hash);
		
	}

}