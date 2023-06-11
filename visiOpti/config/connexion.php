<?php

try {
		$access=new pdo("mysql:host=localhost;dbname=articles;charset=utf8", "root", "Karmusa1");
		
		$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}
    
    


?>