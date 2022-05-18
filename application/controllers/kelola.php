<?php

class Kelola extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
    }

    public function index()
    {
        $this->load->model('M_login');
        $this->M_login->cek_session();

        $queryAllData = $this->M_data->getDataAll();
        $data = array('queryAllData' => $queryAllData);
        $this->load->view('v_kelola', $data);
    }

    function halamanEdit($id)
    {
        $data['guestbook'] = $this->M_data->getById($id);
        $this->load->view('v_kelola_edit', $data);
    }

    public function fungsiEdit()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('keperluan', 'Keperluan', 'required');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $data['nama'] = $this->input->post('nama');
            $data['instansi'] = $this->input->post('instansi');
            $data['alamat'] = $this->input->post('alamat');
            $data['no_hp'] = $this->input->post('no_hp');
            $data['keperluan'] = $this->input->post('keperluan');
            $this->M_data->edit_data($data, $id);
            redirect(base_url("kelola"));
        } else {
            $id = $this->input->post('id');
            $data['user'] = $this->M_data->getById($id);
            $this->load->view('v_kelola_edit', $data);
        }
    }

    public function fungsiDelete($id)
    {
        $this->load->model('M_login');
        $this->M_login->cek_session();

        $this->M_data->delete_data($id);
        redirect(base_url("kelola"));
    }

    public function export_excel()
    {
        $this->load->model('M_login');
        $this->M_login->cek_session();

        $data = array(
            'title' => 'Laporan Excel',
            'user' => $this->M_data->getDataAll()
        );
        $this->load->view('laporan_excel', $data);
    }

    public function export_pdf()
    {
        $this->load->model('M_login');
        $this->M_login->cek_session();


        $data['user'] = $this->M_data->getDataAll();

        $this->load->view('laporan_pdf', $data);
    }
}
