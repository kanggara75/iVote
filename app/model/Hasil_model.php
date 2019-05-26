<?php

class Hasil_model{
    private $table = 'hasil';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllHasil()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getHasilByNo($no)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE no=:no');
        $this->db->bind('no', $no);
        return $this->db->single();
    }
}