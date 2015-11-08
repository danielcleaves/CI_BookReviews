<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

	public function addbook_view()
	{
		$this->load->model('Author');
		$author = $this->Author->get_author();
		$this->load->view('addbook', array('author' => $author));	
	}



	public function get_book($id)
	{
		$this->load->model('Book');
		$get_book = $this->Book->get_review($id);
		$this->load->view('view', array('get_book' => $get_book));
	}

	public function quick_add($id)
	{
		$this->load->view('home');
		$this->load->model('Review');
		$review = array();
		$review = array (
			'review' => $this->input->post('add_review'),
			'rating' => $this->input->post('rating'),
			'book_id' => $id,
			'user_id' => $this->session->userdata('user')['id']
				);
			
			$this->Review->add_review($review);
			redirect('/books_home');


	}

	public function addbook()
	{


		if($this->input->post('author_list') == NULL && $this->input->post('authors') == NULL) 
		{
			$this->session->set_flashdata('author_error','Enter Something bro');
			redirect('/addbook_view');
		}
		else
		{
			if($this->input->post('author_list') != NULL)
			{
				$author_returned = $this->input->post('author_list');

			}
			else
			{
				$this->load->model('Author');
				$author_name = $this->input->post('authors');
				$author_returned = $this->Author->add_author($author_name);   
			}
			

			$this->load->model('Book');
			$book = array();
			$book = array ( 
				'title' => $this->input->post('title'),
				'Author_id' => $author_returned
			);
			$book_returned = $this->Book->addbook($book);


			$this->load->model('Review');
			$review = array();
			$review = array (
				'review' => $this->input->post('review'),
				'rating' => $this->input->post('rating'),
				'book_id' => $book_returned,
				'user_id' => $this->session->userdata('user')['id']
				);
			
			$this->Review->add_review($review);
			redirect('/books_home');

				
		}



		
	}

		
	

}