<?php
	if(!$_POST['name'] || !$_POST['link'] || !$_POST['description'] || !$_POST['price'] ||  !$_POST['actual'] || $_POST['submit'] != "OK")
	{
		echo"ERROR\n";
		exit;
	}
	else
	{
	$actual = $_POST['actual'];
	$name = $_POST['name'];
	$link = $_POST['link'];
	$description =  $_POST['description'];
	$price = $_POST['price'];
		if(file_exists("database/element"))
		{
			$mytab = array($tbl);
			$mytab= unserialize(file_get_contents("database/element"));
			$i = 0;
			foreach($mytab as $elem)
			{
				if($elem['name'] === $actual)
				{
					$mytab[$i]['name'] = $name;
					$mytab[$i]['link'] = $link;
					$mytab[$i]['price'] = $price;
					$mytab[$i]['description'] = $description;
				}
				$i++;
			}
		$mytab = serialize($mytab);
		file_put_contents("database/element",$mytab);
		header('location: http://e3r10p11.42.fr:8080/rush/index.php');
		}
	}
?>