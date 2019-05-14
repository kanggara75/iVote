<?php

class About extends Controller {
    public function index($nama = 'KAnggara75', $status = 'Enginer' )
    {
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['judul'] = 'About iVote';
        $data['calon'] = $this->model('Calon_model')->getAllCalon();
        $this->view('templates/header', $data);        
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);        
        $this->view('about/page');
        $this->view('templates/footer');
    }
} 

/*

Nama Kelompok:
1. Kelvin Anggara
2. Fahzur Rahman
3. Adi Gunawan
4. Riski Mangaraja
5. Agus Tami
6. Yudha Bagus Prasetya

 */