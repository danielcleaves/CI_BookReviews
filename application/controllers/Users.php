<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {


	public function index()
	{
		$this->load->view('home');
	}


	public function books_home()
	{
		$this->load->model('Review');
		$book = $this->Review->get_reviews();
		$this->load->view('books_home', array('book' => $book));
	}

	public function user($id)
	{
		$this->load->model('User');
		$this->load->model('Review');
		$get_user = $this->User->get_user($id);
		$get_reviews=  $this->Review->user_reviews($id);
		$this->load->view('user_reviews', array('get_reviews' => $get_reviews, 'user' => $get_user));


	}

	public function register()
	{
		$this->load->model('User');		
		$status = $this->User->validate_reg($this->input->post());
		if($status === TRUE)
		{
			$user_info = [
				'name' => $this->input->post('name'),
				'alias' => $this->input->post('alias'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')

			];
		$this->User->create_user($user_info);
		$this->session->set_flashdata('Success', "User has been created, please login with credentials");
		redirect('/');

		}
		else 
		{
			redirect('/');
		}
	}

	public function login()
	{
		$this->load->model('User');
		$user = $this->User->log_in($this->input->post());

		if($user)
		{
			$this->session->set_userdata('user',$user);
			redirect('/books_home');
		}

		else 
		{
			redirect('/');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('logout', 'You have logged out');
		$this->load->view('home');
	}


}