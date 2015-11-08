<?php 
class User extends CI_Model {


	public function validate_reg($data)
	{
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules("name", "Name", "trim|required|alpha");
			$this->form_validation->set_rules("alias", "Alias", "trim|required|alpha");
			$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|is_unique[users.email]");
			$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]|matches[confirm_password]");
			$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|matches[password]");
		}

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('registration_errors', validation_errors());
			return FALSE;
		}
		else 
		{
			return TRUE;
		}
	}
		
	public function create_user($data)
	{
		$query = "INSERT INTO users (name,alias, email, password, created_at, updated_at)
				VALUES(?,?,?,?,NOW(),NOW())";
			$values = array($data['name'], $data['alias'], $data['email'], $data['password']);
			$this->db->query($query,$values);	
			return TRUE;
	}

	public function log_in($data)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
		}
		else 
		{
			$query = "SELECT id, name, alias, email, password, created_at, updated_at FROM users WHERE email = ? AND password = ?";
			$result = array($data['email'], $data['password']);
			return $this->db->query($query, $result)->row_array();
		}
	}

	public function get_user($id)
	{
		$query = "SELECT alias, name, email
		FROM users
		WHERE users.id= '{$id}'";
		return $this->db->query($query)->row_array();
	}


}
?>