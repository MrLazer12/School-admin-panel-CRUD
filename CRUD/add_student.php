<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/add_student.css">
	<title>Document</title>
</head>
<body>
	<form name="form_user" method="post" action="add_student.php">
		<a href="crud.php">
			<img alt="List" title="List" src="images/list.png" width="20px"> Listează elevi
		</a>


		<table border="0" align="center" width="100%" cellpadding="10" cellspacing="0">
			<tbody>
				<tr class="tableheader">
					<td colspan="2">Adaugă elev</td>
				</tr>

				<tr>
					<td><label>Nume</label></td>
					<td><input required type="text" name="nume"></td>
				</tr>

				<tr>
					<td><label>Prenume</label></td>
					<td><input required type="text" name="prenume"></td>
				</tr>

				<tr>
					<td><label>Adresa</label></td>
					<td><input required type="text" name="adresa"></td>
				</tr>

				<tr>
					<td><label>Email</label></td>
					<td><input required type="email" name="email"></td>
				</tr>

				<tr>
					<td><label>Data nașterii</label></td>
					<td><input required type="date" name="data_nasterii"></td>
				</tr>

				<tr>
					<td><label>Sex:</label></td>
					<td>
						<input id="male" type="radio" name="sex" value="m"><label for="male">Masculin</label>
						<br>
						<input id="female" type="radio" name="sex" value="f"><label for="female">Feminin</label>
					</td>
				</tr>

				<tr>
					<td><label>Media BAC</label></td>
					<td><input required type="text" name="media_bac"></td>
				</tr>

				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</tbody>
		</table>
		<?php
			if(isset($_POST['submit']) ){
				$nume   = $_POST['nume'];
				$prenume= $_POST['prenume'];
				$adresa = $_POST['adresa'];
				$email  = $_POST['email'];				
				$data_nasterii = $_POST['data_nasterii'];
				$media_bac     = $_POST['media_bac'];

				if(isset($_POST['sex']) == 1)
					$sex = $_POST['sex'];
				else {
					print '<b class="message">Please select gender!</b>';
					return;					
				}
				
				
				include "php/connection.php";
				$query = "INSERT INTO elevi (id, nume, prenume, adresa, email, data_nasterii, sex, media_bac)
						  VALUES ('', '$nume', '$prenume', '$adresa', '$email','$data_nasterii', '$sex', '$media_bac');";

				if (mysqli_query($conexiune, $query))
				 	print '<b class="message">Datele au fost introduse in baza de date!</b>';
				else
				  	print '<b class="message">Error:'. $query . '<br>' . mysqli_error($conexiune) . '</b>';

				mysqli_close($conexiune);
			}
		?>
	</form>
</body>
</html>