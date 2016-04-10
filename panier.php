<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
PAGE PRINCIPALE
<a href = "del_panier.php">DELETE BASKET</a>
<?php
		include "print_panier.php";
		print_panier();
?>
<br />
<a href = "valid_basket.php"><img SRC= "https://ma-bureautique.com/Public/Images/site/valider-ma-commande.jpg"></a>
</div>
</BODY>
</HTML>