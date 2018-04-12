<?php 
   session_start();
   $id=$_POST["idutilisateur"];
   $nom=$_POST["nom_utili"]; 
   $prenom=$_POST["prenom_utili"]; 
   $login=$_POST["login"]; 
   $pass=$_POST["pass"]; 
   $repass=$_POST["repass"]; 
   $valider=$_POST["valider"]; 
   $erreur=""; 
   if(isset($valider)){ 
      if(empty($nom)) $erreur="Nom laissé vide!"; 
      elseif(empty($prenom)) $erreur="Prénom laissé vide!"; 
      elseif(empty($login)) $erreur="Login laissé vide!"; 
      elseif(empty($pass)) $erreur="Mot de passe laissé vide!";
      elseif(empty($repass)) $erreur="Confirmer le mot de passe!";
      elseif($pass!=$repass) $erreur="Mots de passe non identiques!"; 
      else{ 
         include("connexionbd.php"); 
         $sel=$bdd->prepare("select idutilisateur from utilisateur where login=? limit 1"); 
         $sel->execute(array($login)); 
         $tab=$sel->fetchAll(); 
         if(count($tab)>0) 
            $erreur="Login existe déjà!"; 
         else{ 
            $ins=$bdd->prepare("insert into utilisateur(idutilisateur,login,pass,nom_utili,prenom_utili) "
                    . "values('', :login,:pass,:nom_utili,prenom_utili)"); 
            if($ins->execute(array(':idutilisateur' =>$_POST[" "],':login' =>$_POST["login"],':pass' =>$_POST["pass"],
                ':nom' =>$_POST["nom_utili"],':prenom' =>$_POST["prenom_utili"]))) 
                    
               header("location:connect.php"); 
         }    
      } 
   } 
?> 
<!DOCTYPE html> 

       
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
      <h1>Créer compte utilisateur</h1> 
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