<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<?php
$total = 0;
	if($_SESSION['panier'])
		{
		 $mytab= unserialize(file_get_contents("database/element"));
		foreach ($_SESSION['panier'] as $elem)
		 {
		 	$name = $elem;
		 	foreach($mytab as $thename)
		 	{
		 		if($name === $thename['name'])
		 		{
		 		$price = $thename['price'];
		 		$total += $price;
		 		}
		 	}
		}
		}
?>
<form id="form" action="succes_basket.php" method="POST">
		<br />
		<br />
    	Souhaitez vous valider votre <br />commande de : <?php echo"$total";?> euro
        <br />
        <input type="hidden"  name="price" value="<?php echo"$total";?>">
        <input type="submit"  name="submit" value="OK">
</form>

</div>
</BODY>
</HTML>