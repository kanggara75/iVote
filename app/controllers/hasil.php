<?php

class Hasil extends Controller{
    public function index($nama = 'KAnggara75', $status = 'Enginer' )
    {
        $data['judul'] = 'Hasil Perolehan Suara';
        $data['nama'] = $nama;
        $data['nama'] = $nama;
        $data['c1'] = $this->model('Hasil_model')->getAllHasil();
        // $data['c2'] = $this->model('Pemilih_model')->getAllPemilih();
        $data['status'] = $status;
        $this->view('templates/header', $data);        
        $this->view('hasil/index', $data);
        $this->view('templates/footer');
    }
}