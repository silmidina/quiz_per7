<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->view('input_siswa');
    }

    public function inputData()
    {
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        );
        $this->siswa_model->insert_siswa($data);
        redirect('siswa/tampil_data');
    }

    public function tampil_data()
    {
        $data['siswa'] = $this->siswa_model->get_all_siswa();
        $this->load->view('tampil_siswa', $data);
    }
}
