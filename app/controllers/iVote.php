<?php

class iVote extends Controller {
    public function index($nama = 'KAnggara75', $status = 'Enginer' )
    {
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['judul'] = 'About iVote';
        $this->iVote('templates/header', $data);        
        $this->iVote('../index', $data);
        $this->iVote('templates/footer');
    }

    public function page(){
        $data['judul'] = 'Page';
        $this->iVote('templates/header', $data);        
        $this->iVote('');
        $this->iVote('templates/footer');
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