<?php
$server="localhost";
$user="root";
$password="";
$database="quiz_projet";
$cnx=mysqli_connect($server,$user,$password,$database);
 if(!$cnx){
     die("erreur cnx:".mysqli_connect_error());
 }

?>