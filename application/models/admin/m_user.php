<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_User extends CI_Model {
	public function get_user($id=FALSE)
	{
		if($id===FALSE){
			$query = $this->db->get('user_account');
			return $query->result_array();
		}
		$query = $this->db->get_where('user_account', array('id_user' => $id));
		return $query->row_array();
	}
	
	public function add_user()
	{
		$data = array(
				'username' 	=> $this->input->post('username'),
				'email'		=> $this->input->post('email'),
				'password'=> $this->input->post('password'),
				'level'=> $this->input->post('level')
				
		);
		
		return $this->db->insert('user_account', $data);
	}
	
	public function delete_category($id)
	{
		$this->db->where('category_id', $id);
		$query = $this->db->delete('category');
		
		if($query){
			echo 'oke';
		}
	}
	
	public function edit_user($id)
	{	
		$data = array(
				'username' 	=> $this->input->post('username'),
				'email'		=> $this->input->post('email'),
				'password'=> $this->input->post('password'),
				'level'=> $this->input->post('level')
				
		);
		$this->db->where('id_user', $id);
		$this->db->update('user_account', $data); 
	}
}