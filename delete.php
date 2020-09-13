<?php
$ref=$_REQUEST['ref'];

$coonect=mysql_connect('localhost','root','') or die('erreur'.mysql_error());
$db=mysql_select_db('excericephp',$coonect);
mysql_query("DELETE FROM `article` WHERE ref='$ref'");

header('location:index.php?msg=supp. avec succées');

?>