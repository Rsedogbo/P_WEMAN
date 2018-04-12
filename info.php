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
    
        <p class="">RACOURCIS MENU <br/> S'INSCRIRE</p>
      <ul>
        <li><a href="deman.php">DEMANDE D'INSCRIPTION</a></li>
        <li><a href="inscrip.php">INSCRIRE</a></li>
        <li><a href="reins.php">REINSCRIPTION</a></li>
      </ul> 
    </div>
    
       <div class="col2">
      <h1>A PROPOS</h1> 
      <div class="erreur">
            <figure>
                <img src="image/baniere.jpg" alt="" width="640" height="310" />
		<figcaption>WEMAN tout en 1</figcaption>
            </figure>
          <?php echo $erreur ?>
      </div> 
      <div class="col21">
        <aside class="annonc">
        <h2>Les actualités </h2>
      <p>Les solutions pour tous.De la préinscription jusqu'au paie de la scolarité </p>
      
    </aside>
        <aside class="annonc">
      <h2>Info</h2>
      <p>Les actualités </p>
      <ul>
          <figure>
	        <img src="image/3.jpg" alt="" width="320" height="150" />
            </figure>
        <p>Pareiné par PIVOTECH_ONE , WEMAN est une plate-forme qui permet le suivit complet de l'apprenant et 
      facilite la vie aux parents.Une harmonie entre éducateurs ,parents et apprenant est privilégiée et sécurisée
        
        </p>
        
      </ul>
    </aside>
          <aside class="annonc">
      <h2>Concepteur</h2>
      <p>Les développeurs de PIVOTECH_ONE ont concu cette plate-forme pour repondre aux besoins des différents acteurs
      du domaine éducatif
      </p>
      
    </aside>
    </div>
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