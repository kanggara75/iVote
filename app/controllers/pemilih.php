<?php

class Pemilih extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Pemilih';
        $data['pemilih'] = $this->model('Pemilih_model')->getAllPemilih();
        $this->view('templates/header', $data);        
        $this->view('pemilih/index', $data);
        $this->view('templates/footer');
    }

    public function detail($no)
    {
        $data['judul'] = 'Detail Pemilih';
        $data['pemilih'] = $this->model('Pemilih_model')->getPemilihByNo($no);
        $this->view('templates/header', $data);        
        $this->view('pemilih/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        
    }
}
