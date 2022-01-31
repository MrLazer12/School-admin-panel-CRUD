<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/crud.css">
	<title>APP - CRUD</title>
</head>
<body>
	<form action="crud.php" method="post">
		<a href="add_student.php" class="add_student">
			<img  alt="Adaugă" title="Adaugă" src="images/add.png" width="20px"> Adaugă elev
		</a>
		<?php
		include "php/connection.php";
			$query = "SELECT * FROM elevi";

			$sql = mysqli_query($conexiune, $query);
			echo '<table id="customers">';
			echo "<thead>
					<tr>
						<th>ID</th>
						<th>Nume</th>
						<th>Prenume</th>
						<th>Adresa</th>
						<th>Email</th>
						<th>Data_nasterii</th>
						<th>Sex</th>
						<th>Media_bac</th>
						<th>Acțiune</th>
					</tr>
				</thead>
				<tbody>";
			while ($row = mysqli_fetch_row($sql)) {
				$rows = count($row);
				echo "<tr>";
				for ($i=0; $i < $rows; $i++)
					echo  "<td>$row[$i]</td>";
					echo '
						<td class="action_styles">
							<a href="edit_student.php?id='.$row[0].'" class="link">
								<img alt="Editează" title="Editează" src="images/edit.png" width="18px" hspace="10">
							</a>  
							<a href="delete_student.php?id='.$row[0].'" class="link">
								<img alt="Șterge" title="Șterge" src="images/delete.png" width="18px" hspace="10">
							</a>
						</td>
					';
				echo "</tr>";
			}
			echo "</tbody></table>";


		mysqli_close($conexiune);
		?>
	</form>
</body>
</html>