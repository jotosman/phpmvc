<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Ibrahim Fathan",
    //         "nrp" => "2007913",
    //         "email" => "baimfatan@gmail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "Fathoni Fillah",
    //         "nrp" => "9247601",
    //         "email" => "thonifillah@gmail.com",
    //         "jurusan" => "Teknik Sipil"
    //     ],
    //     [
    //         "nama" => "Dzulfikar Ghoziyarohman",
    //         "nrp" => "0862338",
    //         "email" => "dzulghoz@gmail.com",
    //         "jurusan" => "Statistika"
    //     ]
    // ];
    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        // return $this->mhs;
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}