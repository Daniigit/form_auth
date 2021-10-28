<?php
   session_start();
   @$login=$_POST["login"];
   @$pass=$_POST["pass"];
   @$valider=$_POST["valider"];
   $bonLogin="DeDe";
   
   $erreur="";
   if(isset($valider)){
   if($login== $bonLogin && md5($pass)=="5e1b18c4c6a6d31695acbae3fd70ecc6"){
        
         @$_SESSION["autoriser"]="oui";
         header("location:session.php");
      }
      else
         $erreur="Mauvais login ou mot de passe!";
   }

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
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
      </style>
   </head>
   <body>
       <form name="fo" method="post" action="">
      <div class="label">Login</div>
         <input type="text" name="login" placeholder="Login" />
         <br />
      <div class="label">Mot de passe</div>
         <input type="password" name="pass" placeholder="Mot de passe" />
         <br />
         <input type="submit" name="valider" value="S'authentifier" />
      </form>
      <?php if(!empty($erreur)){?>
    <div id = "erreur">
        <?=$erreur?>
    </div>
    <?php } ?>
   </body>
</html>