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
        if ($this->model('Pemilih_model')->tambahDataPemilih($_POST) > 0) {
            Notifer::setNotif('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'admin/pemilih');
            exit;
        } else{
            Notifer::setNotif('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'admin/pemilih');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Pemilih_model')->getPemilihByNo($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Pemilih_model')->ubahDataPemilih($_POST) > 0) {
            Notifer::setNotif('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'admin/pemilih');
            exit;
        } else{
            Notifer::setNotif('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'admin/pemilih');
            exit;
        }
    }
}
