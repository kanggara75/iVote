<?php

class Pemilih_model
{
    private $table = 'pemilih';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPemilih()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPemilihByNo($no)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no=:no');
        $this->db->bind('no', $no);
        return $this->db->single();
    }

    public function tambahDataPemilih($data)
    {
        $query = "INSERT INTO pemilih VALUE ('', :nama, :nim, '0')";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
