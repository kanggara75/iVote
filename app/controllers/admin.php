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
        $data['judul'] = 'Daftar Pemilih';
        $data['pemilih'] = $this->model('Pemilih_model')->getAllPemilih();
        // $data['pemilih'] = $this->model('Pemilih_model')->getPemilihByNo($no);
        $this->view('admin/pemilih', $data);
        $this->view('templates/footer');
    }

    public function paslon()
    {
        $data['judul'] = 'List Pasangan Calon';
        $data['paslon'] = $this->model('Calon_model')->getAllCalon();
        $this->view('admin/paslon', $data);
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
            Notifer::setNotif('berhasil', 'ditambahkan', 'success', 'Pemilih');
            header('Location: ' . BASEURL . 'admin/pemilih');
            exit;
        } else{
            Notifer::setNotif('gagal', 'ditambahkan', 'danger', 'Pemilih');
            header('Location: ' . BASEURL . 'admin/pemilih');
            exit;
        }
    }
    
    public function hapus($id)
    {
        if ($this->model('Pemilih_model')->hapusDataPemilih($id) > 0) {
            Notifer::setNotif('berhasil', 'dihapus', 'success', 'Pemilih');
            header('Location: ' . BASEURL . 'admin/pemilih');
            exit;
        } else{
            Notifer::setNotif('gagal', 'dihapus', 'danger', 'Pemilih');
            header('Location: ' . BASEURL . 'admin/pemilih');
            exit;
        }
    }

    public function hapuspaslon($id)
    {
        if ($this->model('Calon_model')->hapusDataPaslon($id) > 0) {
            Notifer::setNotif('berhasil', 'dihapus', 'success', 'paslon');
            header('Location: ' . BASEURL . 'admin/paslon');
            exit;
        } else{
            Notifer::setNotif('gagal', 'dihapus', 'danger', 'paslon');
            header('Location: ' . BASEURL . 'admin/paslon');
            exit;
        }
    }

    public function tambahpaslon()
    {
        if ($this->model('Calon_model')->tambahDataPaslon($_POST) > 0) {
            Notifer::setNotif('berhasil', 'ditambahkan', 'success', 'Pasangan Calon');
            header('Location: ' . BASEURL . 'admin/paslon');
            exit;
        } else{
            Notifer::setNotif('gagal', 'ditambahkan', 'danger', 'Pasangan Calon');
            header('Location: ' . BASEURL . 'admin/paslon');
            exit;
        }
    }

}
