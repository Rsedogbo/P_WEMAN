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
      <section>
        <article>
      <h2 class="titre">Effectuer votre inscription</h2>
      <p></p>
      
      
      <form method="post" action="" enctype="multipart/form-data">

          <fieldset id="coordonnees">

       <legend class="titre">Vos coordonnées</legend> <!-- Titre du fieldset --> 


       <label>Quel est votre nom ?</label>

       <input type="text" name="nom" /><br /><br />


       <label>Quel est votre prénom ?</label>

       <input type="text" name="prenom"  /><br /><br />
       
       
       <label>votre acte de naissance</label>

       <input type="file" name="actenais"  /><br /><br />
       
       
       <label for="telefo">Quel est votre numéro de téléphone ?</label>

       <input type="tel" name="telefo" id="telefo" /><br /><br />
 

       <label for="email">Quel est votre e-mail ?</label>

       <input type="email" name="email" id="email" /><br /><br />
       
       <label for="klasse">Quel est votre classe ?</label>

       <input type="text" name="klasse" id="klasse" /><br /><br />
       <label>Fraix de réinscription</label>
       <input type="text" name="prix"  /><br /><br />

   </fieldset>

 <br /><br />
 <br /><br />

   <fieldset>

       <legend class="titre">Entrer les informations des parents :</legend> <!-- Titre du fieldset -->

       <p class="titres">

          <label>Adresse e-mail parents<br /> 
          <input name="upload" type="email" />
          </label>
          <br />
          <br />
          <label>Numéro de téléphone parents <br /> 
          <input name="upload" type="tel" size="20" required /><br />
          
          </label>
          <br />
          <input name="upload" type="tel" size="20"  required/>
          <br />
          
          <label>Nom & Prénom parents
          <br />
	  <input size="80" type="text" name="fichier" required />
          </label>
          <br />
          <br />
          <label>Fonctions <br /> 
          <input name="upload" type="text" size="80" required/>
          </label><br />

       </p>
  </fieldset>
          
          <fieldset id="message">
       <p>
           <label class="titre">Adresse des parents veuillez préciser :</label><br />
           <textarea name="precisions" id="precisions" cols="40" rows="7"></textarea>
       </p>
       <br />
       <br />
           <p id="buttonss">
               <input type="submit" name="envoi" value="Envoyer" />
               <input type="reset" name="effacer" value="Annuler" />
           </p>

      </fieldset>

</form>

      </article>
    </section>
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