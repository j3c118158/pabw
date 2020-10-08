<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class='container mt-3'>
		<h2>Daftar data dalam database</h2>
		<a href="insert.php" class="btn btn-primary">tambah data</a>	
		<table class="table mt-3">
			<thead class="thead-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nim</th>
					<th scope="col">Nama</th>
					<th scope="col">JenisKelamin</th>
					<th scope="col">Agama</th>
					<th scope="col">Renang</th>
					<th scope="col">Basket</th>
					<th scope="col">Futsal</th>
					<th scope="col">Foto</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				    include "koneksi.php";
				    $r = mysqli_query($kon,"SELECT * FROM mahasiswa");
				    $i = 0;
				    while($brs = mysqli_fetch_assoc($r)){
				    	if($brs['renang'] == 1)
				    		$hobi1="<span class='fas fa-check'></span>";
				    	else
				    		$hobi1="<span class='fas fa-minus'></span>";
				    	if($brs['basket'] == 1)
				    		$hobi2="<span class='fas fa-check'></span>";
				    	else
				    		$hobi2="<span class='fas fa-minus'></span>";
				    	if($brs['futsal'] == 1)
				    		$hobi3="<span class='fas fa-check'></span>";
				    	else
				    		$hobi3="<span class='fas fa-minus'></span>";
				    	echo ' 
							<tr>
								<th scope=row>'.++$i.'</th>
								<td>'.$brs['nim'].'</td>
								<td>'.$brs['nama'].'</td>
								<td>'.$brs['jenisKelamin'].'</td>
								<td>'.$brs['agama'].'</td>
								<td>'.$hobi1.'</td>
								<td>'.$hobi2.'</td>
								<td>'.$hobi3.'</td>
								<td> <img src="images/'.$brs['foto'].'" width="150" height="150"></td>
								<td> <a class="btn btn-primary" href="edit.php?id='.$brs['id'].'">edit</a><br><br> <a class="btn btn-danger" href="delete.php?id='.$brs['id'].'">delete</a><br>
							</tr>
				    	';
				    }
				?>
			</tbody>
		</table>
	</div>
		<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>
