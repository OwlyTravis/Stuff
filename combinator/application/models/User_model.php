<?php

	class User_model extends CI_Model {

		public function validate()
		{
			$this->db->where('username', $this->input->post('username'));
			$this->db->where('password', md5($this->input->post('password')));
			$query = $this->db->get('Users'); 
			
			if ($query->num_rows() == 1) { // If user and password exist 
				return true;
			}

		}

		public function create_member() 
		{
			$username = $this->input->post('username');
			
			$new_member_insert_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email_address' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			
			$insert = $this->db->insert('Users',$new_member_insert_data);
			return $insert;
		}

		

	}

?>