<?php
	if(!$_POST['name'] || !$_POST['price'] || !$_POST['description'] || !$_POST['link'] || $_POST['submit'] != "OK")
	{
		echo"ERROR\n";
	}
	else
	{
	$name = $_POST['name'];
	$price = $_POST['price'];
	$link = $_POST['link'];
	$description = $_POST['description'];
	$tbl = array("name" => $name, "price" => $price, "link"=> $link ,"description"=> $description);
		if(!file_exists("database"))
		{
			mkdir("database",0777);
			$mytab = array($tbl);
		}
		else
		{
			$mytab= unserialize(file_get_contents("database/element"));
			foreach($mytab as $elem)
			{
				if($elem['name'] === $name)
				{
					echo"ERROR";
					exit;
				}
			}
			$mytab []= $tbl;
		}
		$mytab = serialize($mytab);
		file_put_contents("database/element",$mytab);
		echo"OK\n";
	}
?>