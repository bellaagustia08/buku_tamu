<?php

class M_data extends CI_Model
{
	private $table = "user";
 
	function ambil_data()
	{
		return $this->db->get('guestbook');
	}

	function getDataAll()
	{
		$query = $this->db->get('guestbook');
		return $query->result();
	}

	function getData()
	{
		$query = $this->db->get('guestbook');
		return $query->result_array();
	}

	public function getById($id)
    {
        return $this->db->get_where('guestbook', ["id" => $id])->row();
    }

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data($data,$id)
    {
        return $this->db->update('guestbook', $data, array('id' => $id));
    }

	function delete_data($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('guestbook');
	}
}
