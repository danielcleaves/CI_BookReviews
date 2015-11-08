<?php 
class Book extends CI_Model {
	
	public function addbook($book)
	{
		$query = "INSERT INTO Books(title,created_at,updated_at,Author_id) 
		VALUES(?, NOW(), NOW(),?)";
		$values = array($book['title'], $book['Author_id']);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}	

	public function get_book()
	{
		return $this->db->query("SELECT * FROM Books")->result_array();
	}

	public function get_id($id)
	{
		$query = "SELECT title FROM books WHERE id = '{$id}'";
		return $this->db->query($query)->row_array();
	}

	public function get_review($id)
	{
		$query = "SELECT title,author_name, rating, name,review, Book_id, reviews_created_at AS Created, reviews.id AS review_id
		FROM reviews
		JOIN books on reviews.book_id = books.id
		JOIN authors on author_id = authors.id
		JOIN users on user_id = users.id
		WHERE book_id = '{$id}'";
		return $this->db->query($query)->result_array();
			
	}

}
?>