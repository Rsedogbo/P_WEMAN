<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=weman;charset=utf8', 'root', 'rosario');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="cssweman.css">
        <title>WEMAN</title>
    </head>
    <body>

