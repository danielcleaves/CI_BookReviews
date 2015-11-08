<?php 
class Review extends CI_Model {
	
	public function add_review($review)
	{
		$query = "INSERT INTO reviews(review, rating, reviews_created_at, updated_at, Book_id, User_id)
		VALUES(?,?,NOW(),NOW(),?,?)";
		$values  = array($review['review'], $review['rating'], $review['book_id'], $review['user_id']);
		$this->db->query($query, $values);
		return;
	}

	public function get_all($id)
	{
		$query = "SELECT * FROM books
		JOIN authors on author_id = authors.id
		JOIN reviews on book_id = books.id
		JOIN users on user_id = users.id
		WHERE user_id = '{$id}'";
		return $this->db->query($query)->row_array();
	}
	public function get_reviews()
	{
		$query = "SELECT * FROM books
		JOIN authors on author_id = authors.id
		JOIN reviews on book_id = books.id
		JOIN users on user_id = users.id
		ORDER by reviews_created_at DESC";
		return $this->db->query($query)->result_array();
	}

	public function delete_review($id)
	{
		$query = "DELETE FROM reviews WHERE id = '{$id}'";
		$this->db->query($query);
	}
	public function user_reviews($id)
	{
		$query = "SELECT name, title, review
		FROM books
		JOIN reviews on book_id = books.id
		JOIN users on user_id = users.id
		where user_id = '{$id}'";
		return $this->db->query($query)->result_array();
	}


}
?>