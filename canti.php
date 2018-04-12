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
       <h1>La CANTINE</h1> 
      
      <div class="col21">        
        <aside class="annonc">
        <ul>
            <figure>
	        <img src="image/can5.jpg" alt="" width="320" height="150" />
            </figure>
           <p>
            <h2>cadre</h2>
            La restauration scolaire dépend de la commune. <br/>
            Cependant, la commune n'est pas obligée de la mettre en place. Si la restauration est assurée, elle<br/> 
            doit respecter certaines règles, notamment garantir aux apprenants un temps de repas <br/>
            d'au moins 30 minutes, une variété dans les menus et des portions adaptées à leur âge.<br/><br/>
            <h2>santé</h2>
            Quand l'état de santé d'un enfant nécessite un régime alimentaire spécifique, l'établissement <br/>
            cherche à mettre en place des menus adaptés. Pour cela, un projet d'accueil individualisé (PAI) peut <br/>
            être mis en place.<br/><br/>
            Dans tous ces cas, les paniers-repas fournis par la famille sont autorisés.<br/>
            <h2>nos tarifs</h2>
            Les tarifs de la cantine scolaire d'un établissement public sont fixés par la commune.<br/>
            Elle peut choisir d'appliquer au tarif le quotient familial, pour adapter le tarif aux <br/>
            revenus et charges de la famille.<br/><br/>
            Temps d'un repas<br/>
            Le temps accordé au repas doit être d'au moins 30 minutes et ne doit pas comporter l'attente <br/>
            éventuelle du service.Composition et qualité nutritionnelle des repas<br/>
            Les menus doivent respecter un équilibre nutritionnel. La taille des portions est adaptée au type <br/>
            de plat et à la classe d'âge.<br/><br/>
            Le repas servi en cantine scolaire comporte :<br/>
            un plat principal,<br/>
            une garniture,<br/>
            un produit laitier,<br/>
            et au choix, une entrée et/ou un dessert.<br/>
            L'eau est à disposition sans restriction.<br/>
            Le sel et les sauces sont servis en fonction des plats et ne sont pas librement accessibles.<br/>
            En revanche, le pain doit être disponible en libre accès.<br/>
            La composition des menus est de la responsabilité de la commune.<br/>
            Les menus de l'école sont généralement consultables sur le site internet de la ville. Selon la commune, <br/>
            les repas sont préparés sur place par le personnel ou par une entreprise de restauration collective.<br/><br/>
        </p>
        
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