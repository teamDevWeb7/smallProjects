<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo_List</title>
    <meta name="description" content="blablablabla">
    <link rel="stylesheet" href="./css/toDo.css">
    <script src="./js/toDo.js"></script>
</head>
<body>
    <main>
        <?php
            // connect BDD + aller chercher enregistrements
            require ".". DIRECTORY_SEPARATOR. "BDD.php";
            $str='SELECT*FROM taches';
            $query=$bdd->query($str);
            $taches=$query->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <img src="./img/clipboard.jpg">
        <h1>Ma To Do List</h1>
        <form action="#" method="POST">
            <input type="text" name="nv" placeholder="Ajouter une tâche">
            <button type="submit" >Ajouter</button>
        </form>
        <button type="button" onclick="refreshh()" id="refr">Refresh</button>

        <?php
            
            // lavage données
            if(isset($_POST['nv'])&& !empty($_POST['nv'])){
                $nv=strip_tags(htmlentities($_POST['nv']));
            

                // verif pas de doublons (petite verif rapide)
                $exist=false;
                foreach($taches as $tache){
                    
                    if($nv==$tache['nom_tache']){
                        $exist=true;
                        break;
                    }
                }
                if($exist==false){
                    $str="INSERT INTO taches(nom_tache) VALUE(:nom_tache)";
                    $query=$bdd->prepare($str);
                    $query->bindValue(':nom_tache', $nv, PDO::PARAM_STR);

                    if($query->execute()){
                        echo '<span class="tempo">La nouvelle tâche a été ajoutée avec succès</span>';
                    }else{
                        echo 'La nouvelle tâche n\'a pas pu être rajoutée';
                    }
                }else{
                    echo '<span class="tempo">Cette tâche est déjà enregistrée</span>';
                }
               

            }else{
                // comme je ne check pas si method get ou post qd j'arrive sur la page ça affiche tt le temps
                echo '<span class="tempo">Merci de saisir une tâche</span>';
            }
        ?>


        <section id="taches">
            <ul>
                <?php
                    foreach($taches as $tache){
                        echo '<li class="li">'.$tache['nom_tache'].'<a href="delete.php?id='.$tache['id'].'">Supprimer</a></li>';
                    }
                ?>
            </ul>

        </section>
    </main>  
</body>
</html>