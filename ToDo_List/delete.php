<?php

require "." . DIRECTORY_SEPARATOR. "BDD.php";

if(isset($_GET['id'])){
    $id=intval($_GET['id']);
    $str="DELETE FROM taches WHERE id= :identifiant";
    $query=$bdd->prepare($str);
    $query->bindValue(':identifiant', $id, PDO::PARAM_INT);
    $query->execute();
    header('location:toDo.php');
}else{
    echo 'Une erreur s\'est produite';
    header('location:toDo.php');
}
?>