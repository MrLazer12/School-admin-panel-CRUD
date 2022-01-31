<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/add_student.css">
	<title>Document</title>
</head>
<body>
	<form name="form_user" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<a href="crud.php">
			<img alt="List" title="List" src="images/list.png" width="20px"> Listează elevi
		</a>

		<?php
			include "php/connection.php";

			$id = $_GET['id'];
			$query = "SELECT * FROM elevi WHERE id='$id'";

			$sql = mysqli_query($conexiune, $query);
			$row = mysqli_fetch_assoc($sql);
			$nume    = $row['nume'];
			$prenume = $row['prenume'];
			$adresa  = $row['adresa'];
			$email   = $row['email'];
			$sex     = $row['sex'];
			$data_nasterii = $row['data_nasterii'];
			$media_bac     = $row['media_bac'];
		?>
		<table border="0" width="100%" cellpadding="10" cellspacing="0">
			<tbody>
				<tr class="tableheader">
					<td colspan="2">Schimbă date elev</td>
				</tr>

				<tr>
					<td><label>Nume</label></td>
					<td><input type="text" name="nume" value="<?php echo $nume ?>"></td>
				</tr>

				<tr>
					<td><label>Prenume</label></td>
					<td><input type="text" name="prenume" value="<?php echo $prenume ?>"></td>
				</tr>

				<tr>
					<td><label>Adresa</label></td>
					<td><input type="text" name="adresa" value="<?php echo $adresa ?>"></td>
				</tr>

				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" value="<?php echo $email ?>"></td>
				</tr>

				<tr>
					<td><label>Data nașterii</label></td>
					<td><input type="date" name="data_nasterii" value="<?php echo $data_nasterii ?>"></td>
				</tr>

				<tr>
					<td><label>Sex:</label></td>
					<td>
						<input type="text" name="sex" value="<?php echo $sex ?>">
					</td>
				</tr>

				<tr>
					<td><label>Media BAC</label></td>
					<td><input type="text" name="media_bac" value="<?php echo $media_bac ?>"></td>
				</tr>
	
				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Update" />
					</td>
				</tr>
			</tbody>
		</table>
			<?php
				if (isset($_POST['submit']) ) {
					$nume = $_POST['nume'];
					$prenume = $_POST['prenume'];
					$adresa = $_POST['adresa'];
					$email = $_POST['email'];
					$sex = $_POST['sex'];
					$data_nasterii = $_POST['data_nasterii'];
					$media_bac = $_POST['media_bac'];

					$update_query = "UPDATE elevi SET 
									  nume = '$nume',
									  prenume = '$prenume',
									  adresa = '$adresa',
									  email = '$email',
									  sex = '$sex',
									  data_nasterii = '$data_nasterii',
									  media_bac = '$media_bac'
									  WHERE id = '$id'";

					if (mysqli_query($conexiune, $update_query) )
					  	print '<b class="message">Înregistrarea a fost actualizată cu succes!</b>';
					else
					  	print '<b class="message">Eroare la actualizarea înregistrării: ' . mysqli_error($conexiune).'</b>';
				}				
				mysqli_close($conexiune);
			?>
	</form>
</body>
</html>
