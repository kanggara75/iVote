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
}