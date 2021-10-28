<?php
   session_start();
   if(@$_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue="Bienvenue dans votre espace personnel";
   else
      $bienvenue="Bienvenue dans votre espace personnel";

?>
<!DOCTYPE html>
<html>

   <head>
      <meta charset="utf-8" />
      <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         a{
            color:#DD7700;
            text-decoration:none;
         }
         a:hover{
            text-decoration:underline;
         }
      </style>
   </head>
   <body>
        <div><h3> Authentification réussie</h4></div>
        <h4><?php echo $bienvenue?></h4>
        <div><a href="deconnexion.php">Déconnexion</a></div>
   </body>
</html>