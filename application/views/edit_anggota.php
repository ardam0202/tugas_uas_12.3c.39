<?php 
include ('kepala.html');
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
</head>
<body>
	<div class="banner">
	<div class="card-footer small text-muted"><marquee>Edit Anggota</marquee></div>
	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('laporan/update') ?>
			  
			  <div class="form-group">
			    <label for="text">Id Anggota</label>
			    <input type="text" name="id_anggota" value="<?php echo $data_laporan->kodos ?>" class="form-control" placeholder="Masukkan Nomer Induk Karyawan">
			    <input type="hidden" value="<?php echo $data_laporan->noid ?>" name="noid">
			  </div>

			  <div class="form-group">
			    <label for="text">Nama Anggota</label>
			    <input type="text" name="nm_anggota" value="<?php echo $data_laporan->kodos ?>" class="form-control" placeholder="Masukkan Nomer Induk Karyawan">
			    <input type="hidden" value="<?php echo $data_laporan->noid ?>" name="noid">
			  </div>

			  <div class="form-group">
			    <label for="text">Email</label>
			    <input type="text" name="email" value="<?php echo $data_laporan->kodos ?>" class="form-control" placeholder="Masukkan Nomer Induk Karyawan">
			    <input type="hidden" value="<?php echo $data_laporan->noid ?>" name="noid">
			  </div>

			  <div class="form-group">
			    <label for="text">Alamat</label>
			    <input type="text" name="alamat" value="<?php echo $data_laporan->kodos ?>" class="form-control" placeholder="Masukkan Nomer Induk Karyawan">
			    <input type="hidden" value="<?php echo $data_laporan->noid ?>" name="noid">
			  </div>

			  <div class="form-group">
			    <label for="text">No KTP</label>
			    <input type="text" name="no_ktp" value="<?php echo $data_laporan->kodos ?>" class="form-control" placeholder="Masukkan Nomer Induk Karyawan">
			    <input type="hidden" value="<?php echo $data_laporan->noid ?>" name="noid">
			  </div>

			  <div class="form-group">
			    <label for="text">No Telpn</label>
			    <input type="text" name="no_telpn" value="<?php echo $data_laporan->nama_dosen ?>" class="form-control" placeholder="Masukkan Nama Karyawan">
			  </div>

			  <div class="form-group">
			    <label for="text">Tanggal Daftar</label>
			    <input type="date" name="tgl_daftar" value="<?php echo $data_laporan->tanggal ?>" class="form-control" >
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Update</button>
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