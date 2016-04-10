<?php session_start(); 
	if(!$_SESSION['panier'])
	{
		$_SESSION['panier'] = array();
	}
?>
<HTML>
<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="index.css">
</HEAD>
<BODY>
<div class= "top"> 
<div><img id = "imgtop" SRC= "http://practicinganthropology.org/wp-content/uploads/2010/08/napa-logo-no-text-transparent-2000x800.png"></div>
<div id="accueil"><a id = "accpolice" href="index.php"><i>Accueil</i></a></div>
<div id="panier"><a  id="panierpolice" href = "panier.php"><i>Panier</i></a></div>
<?php 
$count = 0;
	if(file_exists("private/passwd"))
		{
			$mytab= unserialize(file_get_contents("private/passwd"));
			$i = 0;
			foreach($mytab as $elem)
			{
				if($elem['login'] === $_SESSION['login'])
				{
					if($mytab[$i]['acces'] === "5" || $_SESSION['login'] === "admin")
					{
						$count = 1;
						break;
					}
				}
				$i++;
			}

		}
		if($count === 1)
		{
		echo'<div id="adminpage"><a id="adminpolice" href = "main_admin_page.php"><i>Admin Page</i></a></div>';
		}
?>
<div id="connexion">
<?php
	if($_SESSION['login'])
	{
		echo'<a id="connexionpolice" href = "logout.php"><i>Disconnect</i></a>';
	}
	else
	{
		echo'<a id="connexionpolice" href = "connexion.php"><i>Connexion</i></a>';
	}
?>
</div>
<div id="inscription">
<?php
	if($_SESSION['login'])
	{
		echo'<a id="inscriptionpolice" href="accountmain.php"><i>Account</i></a></div>';
	}
	else
	{
		echo'<a id="inscriptionpolice" href="inscription.php"><i>Register</i></a></div>';
	}
?>
</div>