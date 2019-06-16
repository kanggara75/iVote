<?php

class Calon_model{
    private $table = 'paslon';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCalon()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    
    public function getCalonByNo($no)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no=:no');
        $this->db->bind('no', $no);
        return $this->db->single();
    }

    public function hapusDataPaslon($id)
    {
        $query = "DELETE FROM paslon WHERE no = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }
}