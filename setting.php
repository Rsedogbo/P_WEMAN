<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="cssweman.css">
        <title>WEMAN</title>
    </head>
    <body>
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of setting
 *
 * @author ROSARIO
 */
class setting {
    //put your code here
}
<?php
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
/*
*
* Init Mysql Database Parameters
*
*/
//$server = '127.0.0.1';
$server = 'localhost';
$username = 'root';
$password = 'rosario';
$database = 'weman';
// Connection request
$link = mysqli_connect($server, $username, $password, $database);
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($link, "SET NAMES utf8");
$FICHE_ROOT_FOLDER = '/Users/Rosario/Downloads/';
$CERTIFICAT_ROOT_FOLDER = '/Users/Rosario/Downloads/';
?>
exempl
Exemple de fichier settings.php
Include dans fichier cible :
<?php
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*
include('../login/session.php');
?>*
 * 
 */
