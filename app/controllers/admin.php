<?php

class Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'iVote Admin Login Page';
        // $data['status'] = 'Admin';
        // $data['nama'] = $this->model('User_model')->getUser();
        // $this->view('templates/hadmin', $data);        
        $this->view('admin/index', $data);
        // $this->view('templates/footer');
    }

    public function register()
    {
        $data['judul'] = 'Daftar Pasangan Calon';
        // $data['pemilih'] = $this->model('Pemilih_model')->getPemilihByNo($no);
        // $this->view('templates/header', $data);        
        $this->view('admin/register', $data);
        $this->view('templates/footer');
    }

    public function pemilih()
    {
        $data['judul'] = 'Detail Pemilih';
        $data['pemilih'] = $this->model('Pemilih_model')->getAllPemilih();
        // $data['pemilih'] = $this->model('Pemilih_model')->getPemilihByNo($no);
        $this->view('admin/pemilih', $data);
        $this->view('templates/footer');
    }

    public function root()
    {
        $data['judul'] = 'Administrator Page';
        // $data['admin'] = $this->model('Pemilih_model')->getPemilihByNo($no);
        // $this->view('templates/header', $data);        
        $this->view('admin/root', $data);
        // $this->view('templates/footer');
    }

    public function notfound()
    {
        $data['judul'] = 'Page not found';
        // $data['admin'] = $this->model('Pemilih_model')->getPemilihByNo($no);
        $this->view('templates/hadmin', $data);
        $this->view('admin/404', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Pemilih_Model')->tambahDataPemilih($_POST) > 0) {
            header('Location: ' . BASEURL . 'admin/pemilih');
            exit;
        }
    }
}
