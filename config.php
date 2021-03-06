<?php 
require_once('params.inc.php');
$connexion ='mysql:host='.HOST.';dbname='.DBHOST.'';
$user = USER;
$password = PASS;


$connexion = new PDO($connexion, $user, $password);
confirm_db_connect($connexion);

function confirm_db_connect($connexion) {
  if ($connexion->connect_erno) {
    $msg = "Database connection failed :";
    $msg .= $connexion->connect_error;
    $msg .= "(" .$connexion->connect_erno. ")";
    exit($msg);
  }
}