<?php

    session_start();
    require_once('connection_db.php');
   
   //  p?intervention='.$data['idinterventions'].'&status=1" ><s
 
   $id = $_GET['id'];


   $reqUpdate = $con->prepare('DELETE FROM `articles` WHERE `id_article` = ?');
   $reqUpdate->execute(array($id ));

   header('Location:dashboard.php');

?>