<?php 
class Reviews extends CI_Controller {
	
	
	public function delete($id)
	{
		$this->load->model('Review');
		$this->Review->delete_review($id);
		redirect('/books_home');
	}


}
?>