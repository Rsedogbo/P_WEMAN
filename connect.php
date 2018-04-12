<?php
include('connexionbd.php');
?>

<?php 
   
   if (isset($_POST['username']) && isset($_POST['password']))
           {
        $uname= $_POST['username'];
   $pswd= $_POST['password'];
   
   $sql = 'select * from utilisateur where login == :$uname';
   $sql1 = 'select * where  idtype_utilisateur == :$idtype';
   
   
   $req = $bdd->query($sql); 
	while($row = $req->fetch()) 
                {
	$pswod = $row['pass'];
	$iduser = $row['idutilisateur'];
	$idtype = $row['idtype_utilisateur'];
	$login = $row['login'];
	}
	$req->closeCursor(); 
    
	
    if (!isset($login))
	{
        // si c'est negatif == false sq veut dire que le l'utilisqteur n'esxiste pas
		$erreur = 'Utilisateur inexistant';
        die('');
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.
        
        //Compare the passwords.
        
        
        //If $validPassword is TRUE, the login has been successful.
        if($pswod == $pswd){
            
            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
			
			$req = $pdo->query($sql1); 
	while($row = $req->fetch()) {
	$typeutilisateur = $row['type_utilisateur'];
	}
			$_SESSION['typeutilisateur'] = $typeutilisateur;
            
            //Definir la page de redirection
            header('Location: parebulle.php');
            exit;
            
        } else{
            $erreur = 'Mauvais mot de passe';
            die('');
        }
    }
    
}
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
      <h1>IDENTIFIE TOi</h1> 
      <div class="erreur"><?php echo $erreur ?></div> 
       <form class="container" action="" method="post" enctype="multipart/form-data">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >

            </form>
            <div align="center"> <?php echo ".$erreur." ?> </div>
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