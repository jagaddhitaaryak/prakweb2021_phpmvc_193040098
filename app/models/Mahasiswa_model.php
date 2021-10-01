<?php

class Mahasiswa_model {
    private $dbh; //database handler
    private $stmt;

    public function __conctruct()
    {
        //data source nama
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() 
    {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}