<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "colegiu";
$conexiune = mysqli_connect($hostname, $username, $password) or die ("Nu mă pot conecta la baza de date");
mysqli_select_db($conexiune, $database) or die ("Nu găsesc baza de date");