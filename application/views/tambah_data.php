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
			<?php echo form_open('laporan/simpan') ?>
			  
			  <div class="form-group">
			    <label for="text">NIK</label>
			    <input type="text" name="kodos" class="form-control" placeholder="Masukkan Nomer Induk Karyawan">
			  </div>

			  <div class="form-group">
			    <label for="text">Nama Karyawan</label>
			    <input type="text" name="nama_dosen" class="form-control" placeholder="Masukkan Nama Karyawan">
			  </div>

			  <div class="form-group">
			    <label for="text">Tanggal</label>
			    <input type="date" name="tanggal" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Waktu</label>
			    <input type="time" name="time" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Dept</label>
			    <select class="form-control" name="matkul">
                	<option value="finance">Finance</option>
                	<option value="produksi">Produksi</option>
                	<option value="pajak">Pajak</option>
                	<option value="hrd">HRD</option>
                	<option value="it">IT</option>
                </select>
			  </div>

			  <div class="form-group">
			    <label for="text">Status Absen</label>
			    <select class="form-control" name="paraf">
                	<option value="cuti">Cuti</option>
                	<option value="sakit">Sakit</option>
                	<option value="izin">Izin</option>
                	<option value="alfa">Alfa</option>
                </select>
			  </div>

			  <div class="form-group">
			    <label for="text">Keterangan</label>
			    <input type="text" name="paraf" class="form-control" placeholder="Masukkan Keterangan">
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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