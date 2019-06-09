<?php
include ('constant.php');

   $pd=new PDO("mysql:host=".HOST,USER,PASS);
   try {
   	$q="create database trains;";
   	
   } catch (Exception $e) {
   	
   }
   

   $pd->exec($q);
   require_once'createTB.php';

?>
