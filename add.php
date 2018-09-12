<?php
	include('db/conn.php');
	if(isset($_POST['company'])){
		$company=$_POST['company'];
		$product=$_POST['product'];

		$conn->query("INSERT INTO pro (company, product) VALUES ('$company', '$product')");
	}

?>