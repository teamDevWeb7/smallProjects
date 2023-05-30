<?php
// infos bdd
$host='localhost';
$dbname='lil_todolist';
$user='root';
$mdp='';
$char='utf8';


try{
    $bdd= new PDO('mysql:host='.$host.';dbname='.$dbname.';charset='.$char,$user,$mdp);
} catch(PDOException $e)
{   echo "ERREUR : ".$e->getMessage();
    die;
}

?>