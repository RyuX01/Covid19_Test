<?php

function db_connect(){
    $host = 'localhost';
    $dbname = 'create';

    $dsn = "mysql:host=$host;dbname=$dbname";
    $user_name = 'root';
    $pass = '';

    try {
        $db = new PDO($dsn,$user_name,$pass);
//        echo "Connecter  ";
    } catch ( Exception  $e ) {
//        echo "ERREUR :  " . $e->getMessage();
        header('location:error.php');
    }

    return $db;
}

// class ConnectPdo
// {

//     public $host = 'localhost';
//     public $dbname = 'create.sql';
//     public $user_name = 'root';
//     public $pass = '';

//     public function connect()
//     {
//         $db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user_name, $this->pass);
//         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

//         return $db;

//     }


// }
