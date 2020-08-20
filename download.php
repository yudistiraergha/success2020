<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Success 2020 </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Data Data User</h2>		
		<br>
		
		<br>
		<br>		
		<br>		
		<table class="table table-bordered">
			<tr>
				<th width="20%">Nama</th>
				<th width="20%">Nim</th>
				<th width="20%">File</th>
			</tr>
			<?php 
			function url(){
				  return sprintf(
				    "%s://%s",
				    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				    $_SERVER['SERVER_NAME'],
				   
				  );
				}

			$data = mysqli_query($koneksi,"select * from upload");
			while($d = mysqli_fetch_array($data)){
				?>
				
				<tr>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><a href="<?=url().'/popup_success/gambar/'.$d['file_download']?>">Download</a></td> 
					
				</tr>
				<?php
			}

			?>
		</table>
	</div>
</body>
</html>