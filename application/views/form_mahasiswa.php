<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo site_url() ?>">Form Mahasiswa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</nav>

	<div class="container">
		<center>
			<h1><?=$tipe?> Mahasiswa</h1>
		</center>

		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama
				</label>
				<div class="col-sm-10">
					<input type="text" placeholder="Masukkan Nama" class="form-control" name="nama"  required="required" maxlength="20" value="<?=isset($default['name'])? $default['name'] : ""?>">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
					NIM					
				</label>
				<div class="col-sm-10">
					<input type="text" placeholder="Masukkan NIM" onkeypress="return hanyaAngka(event)" class="form-control" name="nim" required="required" maxlength="14" value="<?=isset($default['nim'])? $default['nim'] : ""?>">
					<script>
						function hanyaAngka(evt) {
			  			var charCode = (evt.which) ? evt.which : event.keyCode
			  			 if (charCode > 31 && (charCode < 48 || charCode > 57))
			    		return false;
			  			return true;
						}
					</script>

				</div>


			</div>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>


		</form>
	</div>
</body>
</html>