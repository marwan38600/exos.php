<?php

class Model {
    public $host = "localhost";
    public $dbname;
    public $username = "root";
    public $password = "";
    public $dbase;

    public function __construct($host, $dbname, $username, $password) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
        $this->dbase = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }

    public function getAllMovies() {
        $sql = "SELECT * FROM movies";
        $statement = $this->dbase->prepare($sql);
        $statement->execute(); 
        $movies = $statement->fetchAll(PDO::FETCH_ASSOC);
        print_r($movies);
    }
    
    
}

