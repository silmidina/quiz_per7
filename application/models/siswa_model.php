<?php
class Siswa_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function insert_siswa($data)
    {
        return $this->db->insert('data_siswa1', $data);
    }

    public function get_all_siswa()
    {
        $query = $this->db->get('data_siswa1');
        return $query->result();
    }
}
