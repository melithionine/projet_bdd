<?php
/* 
    Fichier à appeler pour se connecter à la BDD.
*/
 //connexion bdd
$user='E201530E';
$mdp='WSUTWW9Y';
$db='E201530E';
$server="mysql.ensinfo.sciences.univ-nantes.prive";

/*user='root';
$mdp='';
$db='E201530E';
$server="localhost";*/


/* Attempt to connect to MySQL database */
$connexion = mysqli_connect($server,$user,$mdp,$db);
 
// Check connection
if($connexion === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
