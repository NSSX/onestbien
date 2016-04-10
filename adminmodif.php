<?php
	if(!$_POST['name'] || $_POST['submit'] != "OK")
	{
		echo"ERROR\n";
	}
	else
	{
	$name = $_POST['name'];
		if(file_exists("database/element"))
		{
			$mytab= unserialize(file_get_contents("database/element"));
			$i = 0;
			foreach($mytab as $elem)
			{
				if($elem['name'] === $name)
				{
					header('location: http://e3r10p11.42.fr:8080/rush/page_elem_modif.php?name='.$name);
					exit;
				}
				$i++;
			}
		
		}
	}
	echo"ERROR\n";
?>