<?php
include "php/connection.php";

	$id = $_GET['id'];
	$query = "DELETE FROM elevi WHERE id = '$id'";
	mysqli_query($conexiune, $query);
	header("Location: crud.php");

mysqli_close($conexiune);