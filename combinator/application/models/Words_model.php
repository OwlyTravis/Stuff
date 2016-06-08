<?php
class Words_model extends CI_Model {

	public function __construct()
	{

	}
	public function get_words()
	{
		$query = $this->db->get('WordList');
		return $query->result_array();	
	}
	public function two_words()
	{
		$query = $this->db->query('SELECT * FROM WordList order by rand() limit 2');
		return $query->result_array();
	}

	public function add_word()
	{
	    $addWord = ucwords($this->input->post('newWord')); 
	    $data = array(
	        'Word' => $addWord
	    );
	    return $this->db->insert('WordList', $data);
	}

	public function get_word_to_edit($idNum) 
	{
		$this->db->where('P_id', $idNum);
		$query = $this->db->get('WordList');
		return $query->result_array();
	}

	public function edit_word()
	{
		$editWordID = $this->input->post('editWordID');
	    $editWord = ucwords($this->input->post('editWord')); 
	    
	    $data = array(
	        'Word' => $editWord
	    );
	    $this->db->where('P_id', $editWordID);
	    $this->db->update('WordList', $data);
	    redirect('words');
	}

	public function remove_word($P_id)
	{	
	    $this->db->where('P_id', $P_id);
	    $this->db->delete('WordList');
	    redirect('words');
	}
	
	// public function check_word($newWord)
	// {
	// 	$query = $this->db->query("SELECT * FROM WordList WHERE Word = '".$newWord."'");
	// 	return $query->result_array();

	// }

	
}