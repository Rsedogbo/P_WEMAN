
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include('connexionbd.php');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="image/logo1copie.jpg" />
        <link rel="stylesheet" type="text/css" href="cssweman.css" media="screen">
        <title>WEMAN</title>
    </head>

    <body>
        
        
<div class="entete">
           
    <div id="logo">
        <img src="image/logo2copie.jpg" alt="Logo de Weman" />
            <h1>Weman</h1>    
    </div>
    <nav>
  
     <ul id="menu">
    <li class="float_left"><a href="index.php">ACCUEIL</a></li>
    <li class="float_left">
        <a href="#">ADMINISTRATION</a>
        <ul>
        <li><a href="#">DIRECTION</a>
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
        </li>
        <li><a href="#">ENSEIGNANT</a>
            <ul>
                <li><a href="documents.php">RESUME DE COURS</a></li>
                <li><a href="entrainement.php">EXERCICE & CORRIGE</a></li>
                <li><a href="revi.php">REVISION</a></li>
                <li><a href="messa.php">MESSAGERIE</a></li>
            </ul>
        </li>
        </ul>
    </li>  
    <li class="float_left">
    <a href="#">HORAIRE</a>
    <ul>
        <li><a href="emploi.php">EMPLOI DU TEMPS</a></li>
        <li><a href="planni.php">PLANNING ECOLE</a></li>
        <li><a href="calen.php">CALENDRIER SCOLAIRE</a></li>
    </ul>
    </li>
    <li class="float_left">
    <a href="#">PEDAGOGIE</a>
    <ul>
       <li><a href="fourni.php">FOURNITURE SCOLAIRE</a></li>
        <li><a href="gril.php">GRILLE SCOLARITE</a></li>
        <li><a href="person.php">PERSONNEL ADMINISTRATIF</a></li>
    </ul>
    </li>
    <li class="float_left">
    <a href="#">SERVICE</a>
    <ul>
        <li><a href="biblio.php">BIBLIOTHEQUE</a></li>
        <!--<li><span style="text-decoration: line-through; font-size: 10px;">Liens</span></li>-->
        <li><a href="recrea.php">RECREATION</a></li>
        <li><a href="inter.php">INTERNAT</a></li>
        <li><a href="canti.php">CANTINE</a></li>
        <li><a href="ori.php">ORIENTATION</a></li>
        <li><a href="paye.php">PAYER SCOLARITE</a></li>
    </ul>
    </li>
    <li class="float_left">
    <a href="#">APPRENANT</a>
    <ul>
        <li><a href="documentsappre.php">RESUME DE COURS</a></li>
        <li><a href="entrainementappre.php">EXERCICE & CORRIGE</a></li>
        <li><a href="reviappre.php">REVISION</a></li>
        <li><a href="emploiappre.php">EMPLOI DU TEMPS</a></li>
        <li><a href="prograappre.php">PROGRAMME COMPO</a></li>
        <li><a href="noteappre.php">NOTE DES COPIES</a></li>
        <li><a href="bulleappre.php">BULLETIN</a></li>
        <li><a href="recuappre.php">RECU</a></li>
        <li><a href="messaappre.php">MESSAGERIE</a></li>
        <li><a href="payeappre.php">PAYER SCOLARITE</a></li>
    </ul>
    </li>
    <li class="float_left">
    <a href="#">PARENT</a>
    <ul>
        <li><a href="parbulle.php">BULLETIN</a></li>
        <li><a href="parrecu.php">RECU</a></li>
        <li><a href="parnote.php">NOTE INTERRO & DEVOIR</a></li>
        <li><a href="parpaye.php">PAYER SCOLARITE</a></li>
        <li><a href="parprogra.php">PROGRAMME DES COMPOSITIONS</a></li>
        <li><a href="parmessa.php">MESSAGERIE</a></li>
    </ul>
    </li>
    <li class="float_left">
    <a href="#">S'INSCRIRE</a>
    <ul>
       <li><a href="deman.php">DEMANDE D'INSCRIPTION</a></li>
        <li><a href="inscrip.php">INSCRIRE</a></li>
        <li><a href="reins.php">REINSCRIPTION</a></li>
    </ul>
    </li>
    <li class="float_left">
    <a href="#">CONTACT</a>
    <ul>
       <li><a href="conta.php">NOUS JOINDRE</a></li>
    </ul>
    </li>
    <li class="float_left">
    <a href="#">A PROPOS</a>
    <ul>
       <li><a href="info.php">INFO SITE</a></li>
    </ul>
    </li>
    <li class="float_left">
        <a href="connect.php">SE CONNECTER</a>
    </li>
    </ul>      
            
        </nav>
</div>  
        
        <section id="slideshow">
		
	<div class="container">
		<div class="c_slider"></div>
		<div class="slider">
			<figure>
				<img src="image/3.jpg" alt="" width="640" height="310" />
				<figcaption>WEMAN tout en 1</figcaption>
			</figure><!--
			--><figure>
				<img src="image/13.jpg" alt="" width="640" height="310" />
				<figcaption>La rentrée facile</figcaption>
			</figure><!--
			--><figure>
				<img src="image/5.jpg" alt="" width="640" height="310" />
				<figcaption>Voir en temps <em>réèl</em> la classe</figcaption>
			</figure><!--
                       --><figure>
				<img src="image/15.jpg" alt="" width="640" height="310" />
				<figcaption>Partout ailleurs <em>suivre</em> son enfant</figcaption>
			</figure><!--
			--><figure>
                            <img src="image/baniere.jpg" alt="" width="640" height="310" />
				<figcaption>Lecole numérique c'est avec <em>WEMAN</em></figcaption>
			--></figure>
		</div>
	</div>
		
	<span id="timeline"></span>
</section>

        

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
        <li><a href="adetatrecu.ph">RECU</a></li>
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
    <section>
        <article>
      <h1>Qui sommes nous?</h1>
      <p class="texte">
      les constructeurs de l'avenir</p>
      <h2>Quelle est notre mission ?</h2>
      <p class="texte">
      les constructeurs de l'avenir</p>
      
      <h2>Que faisons nous ?</h2>
      
      
      <h2>Notre vision</h2>


      <h2>Sous-section</h2>
      </article>
    </section>
    </div>
    <!--
    le contenu placé sur le côté peut aussi
    être dans le contenu principal
    -->
   

 <div class="col3">
        <aside class="annonce">
        <h2>Les actualités </h2>
      <p>Les actualités de la semaine </p>
      <ul>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
      </ul>
    </aside>
        <aside class="annonce">
      <h2>ANNONCE</h2>
      
     <section id="slideshow3">
        <div class="container3">
            <div class="slider3">
		<figure>
                    <img src="image/logo2copie.jpg" alt="" width="220" height="210" />
	        </figure><!--
	     --><figure>
		    <img src="image/16.jpg" alt="" width="220" height="210" />
		</figure><!--
	     --><figure>
		    <img src="image/F2.jpg" alt="" width="220" height="210" />
		</figure><!--
             --><figure>
		    <img src="image/15.jpg" alt="" width="220" height="210" />
                    <figcaption>Lecole numérique c'est avec <em>WEMAN</em></figcaption>
		</figure><!--
	     -->
            </div>
        </div>
    </section>
      
    </aside>
    </div>

  
        
    
   </div>
        
        
<footer>
   
   <a href="#">&copy; &nbsp WEMAN &nbsp &nbsp</a>
 
   <a href="https://www.facebook.com/search/top/?q=pivotechone">Copyright &copy; 2018 PIVOTECH_ONE &nbsp &nbsp </a> 
     
   <a href="https://pivotech.xyz/">SEDOGBO &nbsp &nbsp Rosario &nbsp;</a>
 
</footer>
    </body>
</html>
