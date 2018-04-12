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
      <h1>Nos heures de pauses</h1> 
      <div class="col21">        
        <aside class="annonc">
        <ul>
            <figure>
	        <img src="image/4.jpg" alt="" width="520" height="170" />
            </figure>
            <p class="tete"> La pause est un moment de détente, qui est important pour le serveau de nos apprenants.<br/>S'évader un 
            moment leur permet de réfléchir à autre chose.Nos instants de détente sont disposé comme suit:</p>           
            <h2>La Matiné</h2>
            <p class="texte">Nos apprenants sont en détente à 10h pour 30 minutes.<br/></p>
            <h2>Midi</h2>
            <p class="texte">Quand le soleil est au zénith on leur permet de se reposer pour 2H45 minutes. <br/>
            Une disposition qui favorise tous apprenant et personnel éducatif afin de prendre des forces et de revenir 
            en force.<br/>Ceci pour le bien de la santé de tous.<br/></p>
            <h2>Soirée</h2>
            <p>De retour pour la seconde moitié de la journée ,la pause est prévu pour 17H d'une durée de 15 minutes. <br/>
            <br/><br/></p>
            
        
        
      </ul>
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