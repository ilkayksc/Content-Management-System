<?php
try{

	$db=new PDO("mysql:host=localhost;dbname=admin",'root','');
	
}
catch (PDOExpception $e) {

	echo $e->getMessage();
}


  ?>