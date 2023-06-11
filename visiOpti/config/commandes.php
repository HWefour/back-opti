<?php

function ajout($nom , $image , $prix , $description)
{
    if(require("connexion.php"))
    {
        $recuperer = $access -> prepare ("INSERT INTO articles_site (nom , description , prix , image ) VALUE ($nom , $description , $prix , $image)");
        $recuperer -> execute(array($nom , $image , $prix , $description));
        $recuperer -> closeCursor();
    }

}

function affiche()
{
    if(require("connexion.php"))
    {
    $recuperer = $access -> prepare("SELECT * FROM  articles_site ORDER BY id DESC");
    $recuperer->execute();
    $stockage = $recuperer -> fetchAll(PDO::FETCH_OBJ);
    return $stockage;
    $recuperer -> closeCursor();
    
    }
    
}
 function supprime($id)
 {
    if(require("connexion.php"))
    {
        $recuperer = $access -> prepare("DELETE * FROM articles_site WHERE id = ?");
        $recuperer -> execute(array($id));
    }

 }

?>