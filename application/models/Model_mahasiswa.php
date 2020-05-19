<?php


class Model_Mahasiswa extends CI_Model{
	public function getMahasiswa()
	{
		return $this->db->get('tb_mhs')->result_array();
	}
	
	public function insertMahasiswa($data)
    {
        $this->db->insert('tb_mhs', $data);
        return $this->db->affected_rows();
    }
}