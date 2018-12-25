<?php
include 'kepala.html';
?>
<div class="banner">
	<div class="container">
		<div class="col-md-13">	
			<div class="card-footer small text-muted">
				<marquee>ANGGOTA</marquee>
		<?php echo $this->session->flashdata('notif') ?>
		<a href="<?php echo base_url() ?>laporan/tambah/" class="btn btn-md btn-success">Tambah Data</a>
		<hr>
		<!-- table -->
		<div class="table-responsive">
			<table id="table" class="table table-striped table-bordered table-hover">
			    <thead>
			      <tr>
			        <th>No.</th>
			        <th>Kode Transaksi</th>
			        <th>Id Anggota</th>
			        <th>Kode Buku</th>
			        <th>Tanggal Pinjam</th> 
			        <th>Tanggal Kembali</th>
			        <th>Jumlah Pinjam</th>
			        <th>Denda</th>
			        <th>Options</th>
			      </tr>
			    </thead>
			    <tbody>

			    <?php
			    	$no = 1; 
			    	foreach($pinjam as $hasil){ 
			    ?>
			      
			      <tr>
			        <td><?php echo $no++ ?></td>
			        <td><?php echo $hasil->kd_transaksi ?></td>
			        <td><?php echo $hasil->id_anggota ?></td>
			        <td><?php echo $hasil->kd_buku ?></td>
			        <td><?php echo $hasil->tgl_pinjam ?></td>
			        <td><?php echo $hasil->tgl_kembali ?></td>
			        <td><?php echo $hasil->jml_pinjam ?></td>
			        <td><?php echo $hasil->denda ?></td>
			        <td>
			        	<a href="<?php echo base_url() ?>laporan/edit/<?php echo $hasil->kd_transaksi ?>" class="btn btn-sm btn-success">Edit</a>
			        	<a href="<?php echo base_url() ?>laporan/hapus/<?php echo $hasil->kd_transaksi ?>" class="btn btn-sm btn-danger">Hapus</a>
			        </td>
			      </tr>

			    <?php } ?>

			    </tbody>
			  </table>
		</div>
		</div>

	

<!-- Bootstrap core JavaScript-->
    <!-- <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery.min.js"></script> -->
    <script src="<?php echo base_url(''); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(''); ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(''); ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(''); ?>assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url(''); ?>assets/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url(''); ?>assets/js/demo/chart-area-demo.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>

			</div>
		</div>
	</div>
</div>
<?php 
include 'kaki.html';
?>