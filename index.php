<?php
$ref='';
if(isset($_GET['ref'])){
    $ref=$_GET['ref'];

}


?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
//$var= $_GET['msg'];
?>

<!-- menu -->
 <?php  include('menu.php'); ?>
<!-- fin -->


<form action="ajout.php" method="post"  >
<table>
<tr>
<td>Réf</td>
<td><input type="text" name="ref" value="<?php echo $ref  ?>">
</td>

</tr>

<tr>
<td>Desgination</td>
<td><input type="text" name="desg" >
</td>

</tr>
<tr>
<td>Prix</td>
<td><input type="text" name="prix" >
</td>

</tr>

<tr>
<td>Taille</td>
<td><input type="numeric" name="taille" >
</td>

</tr>

<tr>
<td>couleur</td>
<td><input type="text" name="couleur" >
</td>

</tr>

<tr>
<td>QTe</td>
<td><input type="text" name="qte" >
</td>

</tr>
<tr>
<td>
<input type="submit" value="Ajouter" name='btn_ajout'>
<input type="submit" value="Update" name='btn_update' >
</td>
</tr>
</table>


</form>
<?php
if(isset($_GET['msg']))
echo $_GET['msg'];


?>

<?php
$coonect=mysql_connect('localhost','root','') or die('erreur'.mysql_error());
$db=mysql_select_db('excericephp',$coonect);

?>
<table>
<tr>
<th>Ref</th>
<th>Designation</th>
<th>Qte</th>
<th>Prix</th>
<th>Action</th>
</tr>
<?php
$res=mysql_query("SELECT `ref`, `designation`, `taille`, `couleur`, `prix`, `qte` FROM `article`");

while($row= mysql_fetch_assoc($res))
{
    

?>
<tr>
<td><?php echo $row['ref'];  ?></td>
<td><?php echo $row['designation'];  ?></td>
<td><?php echo $row['qte'];  ?></td>
<td><?php echo $row['prix'];  ?></td>
<td><a href="delete.php?ref=<?php echo $row['ref'] ?>">Delete</a>
<a href="index.php?ref=<?php echo $row['ref'] ?>">Voir</a>
</td>
</tr>


<?php
} 
?>

</table>
</body>
</html>