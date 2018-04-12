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
      <h2 class="titre">Effectuer votre réinscription</h2>
      <p></p>
      
      
      <form method="post" action="" enctype="multipart/form-data">

           <fieldset>

               <legend class="titre">Entrer les informations :</legend> <!-- Titre du fieldset -->

                  <p class="titres">

                 <label>Adresse e-mail parents<br /> 
                 <input name="upload" type="email" size="30"/>
                 </label>
                 <br />
                 <br />
                 <label>Numéro de téléphone parents <br /> 
                 <input name="upload" type="tel" size="20" required /><br />
          
                 </label>
                 <br />
                 <label>Votre numéro de téléphone <br />
                 <input name="upload" type="tel" size="20"  required/>
                 </label>
                 <br />
          
                 <label>Votre Nom & Prénom
                 <br />
	         <input size="90" type="text" name="fichier" required />
                 </label>
                 <br />
                 <br />
                 <label>Fraix de réinscription</label>
                 <input type="text" name="prix"  /><br /><br />
                  <p class="titre">INDIQUER LA CLASSE CONCERNE</p><br />
          <p>
          <select name="classe" id="classe">

           <optgroup label="1ier CYCLE" >
               
               <option value="6ième">6ième</option>
               <option value="5ième">5ième</option>
               <option value="4ième">4ième</option>
               <option value="3ième">3ième</option>

           </optgroup>

           <optgroup label="2imè CYCLE">

               <option value="2nda">2nd A</option>
               <option value="2ndb">2nd B</option>
               <option value="2ndc">2nd C</option>
               <option value="2ndd">2nd D</option>
               <option value="2ndG1">2nd G1</option>
               <option value="2ndG2">2nd G2</option>
               <option value="2ndG3">2nd G3</option>
               <option value="1ièrea">1ière A</option>
               <option value="1ièreb">1ière B</option>
               <option value="1ièrec">1ière C</option>
               <option value="1ièred">1ière D</option>
               <option value="1ièreG1">1ière G1</option>
               <option value="1ièreG2">1ière G2</option>
               <option value="1ièreG3">1ière G3</option>
               <option value="Tlea">Tle A</option>
               <option value="Tleb">Tle B</option>
               <option value="Tlec">Tle C</option>
               <option value="Tled">Tle D</option>
               <option value="TleG1">Tle G1</option>
               <option value="TleG2">Tle G2</option>
               <option value="TleG3">Tle G3</option>
           </optgroup>
       </select>
              
       </p>
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