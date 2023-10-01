<?php
session_start();


echo ('<h1>Resultat</h1>');

// database connect
include ("database.php");
$db = db_connect();

//user object create
include ("user.php");
$patient = new patient_symptoms();


$key_insert = '('.(implode(",",array_keys($_SESSION['res']))).')';
$data_insert = '('.(implode(",",array_values($_SESSION['res']))).')';

echo $key_insert;
echo $data_insert;

// insert into patient_symptoms table  ///////////////////////////////////////////////////////////
$symptoms = $patient->insert($key_insert,$data_insert, $db);


header("Location: ../result.php");
