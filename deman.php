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
      <h1>ENVOIE DE DEMANDE D'INSCRIPTION</h1>
      <p class="titre">Remplissez le formulaire suivant pour faire votre demande.</p>
		<form name="deman" action="" method="post" enctype="multipart/form-data"> 
		    <fieldset id="coordonnees">                                
                    <div> 
                        <p id="civilite">

                        <label for="classe">Dans quel classe souhaitez-vous vous inscrire ?</label><br />
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
				<label>votre adresse e-mail <br /> 
                                <input name="upload" type="email" />
                                </label>
                                <br />
                                <br />
                                <label>votre numéro de téléphone <br /> 
                                <input name="upload" type="tel" size="20" />
                                </label>
                                <br />
                                <br />
                                <label>Relevé de note
                                    <br />
				<input size="100" type="file" name="fichier"  />
                                </label>
				<br />
                                <br />
                                <label>Envoyer Bulletin <br /> 
                                <input name="upload" type="file" size="120" />
                                </label>
                                <br />
                                <br />
                                <label>Envoyer votre dernier Diplôme <br />
                                <input name="upload" type="file" size="120" />
                                </label>
                                <br />
                                <br />
                                <p id="buttonss">
                                <input type="submit" name="envoi" value="Envoyer ma demande" />
                                <input type="reset" name="effacer" value="Annuler ma demande" />
                                </p>
			</div> 
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