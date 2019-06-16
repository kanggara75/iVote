<?php

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'iVote';
        $data['calon'] = $this->model('Calon_model')->getAllCalon();
        // $data['hasil'] = $this->model('Hasil_model')->getAllHasil();/
        $this->view('templates/header', $data);        
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}