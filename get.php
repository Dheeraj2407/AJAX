<?php
	$cn=new mysqli("localhost","root","","AJAX");
	$name=$cn->query("select name from sample");
	echo $name->fetch_array()[0]
?>
