<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=bd_event","root","");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>