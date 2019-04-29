<?php
try{

	$db=new PDO("mysql:host=localhost;dbname=databasename",'username','password');
	
}
catch (PDOExpception $e) {

	echo $e->getMessage();
}


  ?>
