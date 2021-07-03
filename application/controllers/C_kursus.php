<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kursus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kursus');
    }

    public function terimaDataKursus()
    {
        $database['nama_kursus'] = $this->input->post('nama_kursus');
        $database['kategori_kursus'] = $this->input->post('kategori_kursus');
        $database['harga_kursus'] = $this->input->post('harga_kursus');
        $this->M_Kursus->simpan_data_kursus($database);

        redirect(base_url('C_Kursus/showKursus'));
    }


    public function showKursus()
    {
        $data['kursus'] = $this->M_Kursus->getDataKursus();

        $this->load->view('template/V_Header');
        $this->load->view('Show/V_Kursus', $data);
        $this->load->view('template/V_Footer');
    }

    public function detailKursus()
    {
        $id_kursus = $this->uri->segment(3);
        $data['kursus'] = $this->M_Kursus->getDataKursusDetail($id_kursus);

        $this->load->view('template/V_Header');
        $this->load->view('Show/V_Detail_Kursus', $data);
        $this->load->view('template/V_Footer');
    }

    public function updateKursus()
    {
        $database['nama_kursus'] = $this->input->post('nama_kursus');
        $database['kategori_kursus'] = $this->input->post('kategori_kursus');
        $database['harga_kursus'] = $this->input->post('harga_kursus');
        $id = $this->input->post('id_kursus');

        $this->M_Kursus->updateKursus($database, $id);
        redirect(base_url('C_Kursus/showKursus'));
    }
}
