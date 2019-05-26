<?php

class Admin extends Controller{
    public function index()
    {
        $data['judul'] = 'iVote Admin Page';
        $data['status'] = 'Admin';
        $data['nama'] = $this->model('User_model')->getUser();
        // $this->view('templates/header', $data);        
        $this->view('admin/index', $data);
        // $this->view('templates/footer');
    }

    public function regis()
    {
        // $data['judul'] = 'Detail Pemilih';
        // $data['pemilih'] = $this->model('Pemilih_model')->getPemilihByNo($no);
        // $this->view('templates/header', $data);        
        $this->view('admin/register', $data);
        // $this->view('templates/footer');
    }

    public function pemilih()
    {
        $data['judul'] = 'Detail Pemilih';
        // $data['pemilih'] = $this->model('Pemilih_model')->getPemilihByNo($no);
        // $this->view('templates/header', $data);        
        $this->view('admin/pemilih', $data);
        // $this->view('templates/footer');
    }

    public function admin()
    {
        $data['judul'] = 'Administrator Page';
        // $data['admin'] = $this->model('Pemilih_model')->getPemilihByNo($no);
        $this->view('templates/header', $data);        
        $this->view('admin/pemilih', $data);
        // $this->view('templates/footer');
    }
}