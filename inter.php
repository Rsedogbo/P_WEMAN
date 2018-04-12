<?php
include('connexionbd.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="image/logo1copie.jpg" />
        <link rel="stylesheet" type="text/css" href="cssweman.css" media="screen">
        <title>WEMAN</title>
        
    </head>

    <body>
        
<?php
include('ad_menu.php');
?>
<div id="cont_col3">
    <div class="col1">
    
        <p class="">RACOURCIS MENU <br/> SERVICE</p>
      <ul>
        <li><a href="biblio.php">BIBLIOTHEQUE</a></li>
        <!--<li><span style="text-decoration: line-through; font-size: 10px;">Liens</span></li>-->
        <li><a href="recrea.php">RECREATION</a></li>
        <li><a href="inter.php">INTERNAT</a></li>
        <li><a href="canti.php">CANTINE</a></li>
        <li><a href="ori.php">ORIENTATION</a></li>
        <li><a href="paye.php">PAYER SCOLARITE</a></li>
      </ul> 
    </div>
    
       <div class="col2">
      <h1>Enregistrer les cycles</h1> 
      <div class="erreur"><?php echo $erreur ?></div> 
      <form name="fo" method="post" action=""> 
         <input type="text" name="nom_utili" placeholder="Nom" value="<?php echo $nom?>" /><br /> 
         <input type="text" name="prenom_utili" placeholder="Prénom" value="<?php echo $prenom?>" /><br /> 
         <input type="text" name="login" placeholder="Login" value="<?php echo $login?>" /><br /> 
         <input type="password" name="pass" placeholder="Mot de passe" value="<?php echo $pass?>" /><br /> 
         <input type="password" name="repass" placeholder="Confirmer Mot de passe" value="<?php echo $repass?>" /><br /> 
         <input type="submit" name="valider" value="S'authentifier" /> 
      </form> 
      </div>
      <?php
include('ad_col3.php');
?>   
    
   </div>
    
        <?php
include('ad_footer.php');
?>
   </body> 
</html> 