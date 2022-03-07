<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Basketball Court Booking </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<!-- Header -->
		<div class="header">
			<img class="logo" src="basketballLogo.png" alt="logo">
			<p class="title">Basketball</p>
		</div>
		
		<!-- Content -->
		
		<div class = "main">
			<h1>Form Booking Lapangan Basket</h1>
			<fieldset>
			<form name="formBooking" action="validasi.php" method="POST">
				<div class="jarak">
					<label>Nama</label><br>
					<input type="text" name="nama" value="<?php echo (isset($_POST['nama']))?$_POST['nama']:'';?>"/>
					<div class="error"><?php 
						if(isset($errors['nama'])){ 
							echo $errors['nama'];
						}
					?></div>
				</div>
				<div class="jarak">
					<label> Alamat Lengkap</label><br>
					<textarea name="alamat"><?php echo(isset($_POST['alamat']))?$_POST['alamat']:'';?></textarea>
					<br><div class="error"><?php 
						if(isset($errors['alamat'])){ 
							echo $errors['alamat'];
						}
					?></div>
				</div>
				<div class="jarak">
					<label>Nomor Whatsapp</label><br>
					<input type="text" name="noWa" value= "<?php echo (isset($_POST['noWa']))?$_POST['noWa']:'';?>" />
					<div class="error"><?php 
						if(isset($errors['noWa'])){ 
							echo $errors['noWa'];
						}
					?></div>
				</div>
				<div class="jarak">
					<label>Tanggal Sewa</label><br>
					<input type="date" name="tglSewa" value= "<?php echo (isset($_POST['tglSewa']))?$_POST['tglSewa']:'';?>"/>
					<div class="error"><?php 
						if(isset($errors['tglSewa'])){ 
							echo $errors['tglSewa'];
						}
					?></div>
				</div>
				<div class="jarak">
					<label>Pukul</label><br>
					<input type="text" name="jamSewa" placeholder="12.00-15.00" value= "<?php echo (isset($_POST['jamSewa']))?$_POST['jamSewa']:'';?>"/>
					<div class="error"><?php 
						if(isset($errors['jamSewa'])){ 
							echo $errors['jamSewa'];
						}
					?></div>
				</div>
				<div class="jarak">
					<input type="submit" name="sewa" value="Sewa"/>
				</div>
			</form>
			</fieldset>
		</div>
		
	</body>
</html>