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
    
        <p class="">RACOURCIS MENU <br/> ADMINISTRACTION</p>
      <ul>
        <li><a href="adlistcycl.php">CYCLE</a></li>
        <li><a href="adlistclax.php">CLASSE</a></li>
        <li><a href="adlistmatiere.php">MATIERE</a></li>
        <li><a href="adlistfourni.php">FOURNITURE</a></li>
        <li><a href="adlistjour.php">JOURS</a></li>
        <li><a href="adlistmois.php">MOIS</a></li>
        <li><a href="adlistapprenan.php">APPRENANT</a></li>
        <li><a href="adlistparen.php">PARENT</a></li>
        <li><a href="adlistperson.php">PERSONNEL</a></li>
        <li><a href="adlistetypeperson.php">TYPE PERSONNEL</a></li>
        <li><a href="ademploitemp.php">EMPLOI DU TEMPS</a></li>
        <li><a href="adprogcompo.php">PROGRAMMER COMPO</a></li>
        <li><a href="adlistcompo.php">COMPOSITION</a></li>
        <li><a href="adprogdevoi.php">PROGRAMMER DEVOIR</a></li>
        <li><a href="adnoteintero.php">NOTE INTERRO</a></li>
        <li><a href="adnotedevoir.php">NOTE DEVOIRS</a></li>
        <li><a href="adcalendriscolair.php">CALENDRIER SCOLAIRE</a></li>
        <li><a href="adperiod.php">PERIODE</a></li>
        <li><a href="adstatu.php">STATU</a></li>
        <li><a href="adtitre.php">TITRE</a></li>
        <li><a href="adprogreunion.php">PROGRAMME DES REUNIONS</a></li>
        <li><a href="adgroupetud.php">GROUPE ETUDE</a></li>
        <li><a href="adgrilscolari.php">GRILLE SCOLARITE</a></li>
        <li><a href="adbiblio.php">BIBLIOTHEQUE</a></li>
        <li><a href="adbulletin.php">BULLETIN</a></li>
        <li><a href="adetatrecu.php">RECU</a></li>
        <li><a href="adscolarite.php">PAYER SCOLARITE</a></li>
        <li><a href="adtyputilisa.php">TYPE UTILISATEUR</a></li>
        <li><a href="adutilisat.php">UTILISATEUR</a></li>
        <li><a href="adpreinscrip.php">PREINSCRIPTION</a></li>
        <li><a href="adinscript.php">INSCRIPTION</a></li>
        <li><a href="adreinscript.php">REINSCRIPTION</a></li>
        <li><a href="admessage.php">MESSAGERIE</a></li>
        <li><a href="adcontutilisateur.php">MODIFIER COMPTE</a></li>
      </ul> 
    </div>
    
       <div class="col2">
      <h1>Enregistrer les matières</h1> 
      <div class="erreur"><?php echo $erreur ?></div> 
      <form name="fo" method="post" action=""> 
         <input type="text" name="codmat" placeholder="Code matière" value="<?php echo $codmat?>" /><br /><br /> 
         <input type="text" name="libmat" placeholder="libellé matière" value="<?php echo $libmat?>" /><br /><br /> 
         <input type="submit" name="valider" value="Enrégistrer" />&nbsp &nbsp
         <input type="reset" name="effacer" value="Annuler" />
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