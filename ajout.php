<?php
$ref = $_REQUEST['ref'];
$des= $_REQUEST['desg'];
$prix= $_REQUEST['prix'];
$taille= $_REQUEST['taille'];
$couleur = $_REQUEST['couleur'];
$qte = $_REQUEST['qte'];

$coonect=mysql_connect('localhost','root','') or die('erreur'.mysql_error());
$db=mysql_select_db('excericephp',$coonect);
if(isset($_REQUEST['btn_ajout'])){
    mysql_query("INSERT INTO `article`(`ref`, `designation`, `taille`, `couleur`, `prix`, `qte`) VALUES ('$ref','$des','$taille','$couleur','$prix','$qte')");

}
else{
    mysql_query("UPDATE `article` SET `designation`='$des',`taille`='$taille',`couleur`='$couleur',`prix`='$prix',`qte`='$qte' WHERE ref='$ref'");
 
}

header('location:index.php?msg=enreg avec succées');


?>
