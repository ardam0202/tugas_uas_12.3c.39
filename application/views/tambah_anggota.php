<?php 
include ('kepala.html');
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
	<div class="banner">
	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('laporan/simpan_anggota') ?>
			  
			  <div class="form-group">
			    <label for="text">Nama Depan</label>
			    <input type="text" name="nadep" class="form-control" placeholder="Masukkan Nama Depan">
			  </div>

			  <div class="form-group">
			    <label for="text">Nama Belakang</label>
			    <input type="text" name="nabel" class="form-control" placeholder="Masukkan Nama Belakang">
			  </div>

			  <div class="form-group">
			    <label for="text">Email</label>
			    <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan Alamat Email" >
			  </div>

			  <div class="form-group">
			    <label for="text">No Telpn</label>
			    <input type="number" name="notelpn" class="form-control" placeholder="Masukkan No Telpn">
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
		</div>
	</div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>

<?php 
include ('kaki.html');
?>