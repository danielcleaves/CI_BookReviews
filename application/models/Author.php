<?php 
class Author extends CI_Model {
	
	public function get_author()
	{
		return $this->db->query("SELECT * FROM authors")->result_array();
	}


	public function add_author($author_name)
	{
		$query = "INSERT INTO Authors(author_name, created_at, updated_at)
		VALUES(?,NOW(),NOW())";
		$values  = $author_name;
		$this->db->query($query, $values);
		return $this->db->insert_id(); 
	}

	
	
}
?>