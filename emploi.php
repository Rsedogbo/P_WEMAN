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
        <li><a href="emploi.php">EMPLOI DU TEMPS</a></li>
        <li><a href="planni.php">PLANNING ECOLE</a></li>
        <li><a href="calen.php">CALENDRIER SCOLAIRE</a></li>
      </ul> 
    </div>
    
       <div class="col2">
      
      <div id="content">
          <h1>EMPLOI DE TEMPS</h1>
      <table class="table1">
                <thead>
                    <tr>
                        <th></th>
                        <th scope="col" abbr="Starter">LUNDI</th>
                        <th scope="col" abbr="Medium">MARDI</th>
                        <th scope="col" abbr="Business">MERCREDI</th>
                        <th scope="col" abbr="Deluxe">JEUDI</th>
                        <th scope="col" abbr="Starter">VENDREDI</th>
                        <th scope="col" abbr="Medium">SAMEDI</th>
                        <th scope="col" abbr="Business">DIMANCHE</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <th scope="row">7H - 8H</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">8H - 9H</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">9H - 10H</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">10H - 10H30</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">10H30 - 11H</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">11H - 12H</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">15H - 16H</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">16H - 17H</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">17H - 17H30</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">17H30 - 18H</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                    <tr>
                        <th scope="row">18H - 19H</th>
                        <td>Maths</td>
                        <td> - </td>
                        <td>Sport</td>
                        <td>Histoire</td>
                        <td>Géographie</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                    </tr>
                </tbody>
            </table>
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