<?php
include 'kepala.html';
?>
<div class="banner">
	<div class="container">
		<div class="col-md-13">	
			<div class="card-footer small text-muted">
				<marquee>Daftar Member</marquee>
		<?php echo $this->session->flashdata('notif') ?>
		<a href="<?php echo base_url() ?>laporan/tambah/" class="btn btn-md btn-success">Tambah Data</a>
		<hr>
		<!-- table -->
		<div class="table-responsive">
			<table id="table" class="table table-striped table-bordered table-hover">
			    <thead>
			      <tr>
			        <th>No.</th>
			        <th>Nama</th>
			        <th>Email</th>
			        <th>No Telpn</th> 
			        <th>Options</th>
			      </tr>
			    </thead>
			    <tbody>

			    <?php
			    	$no = 1; 
			    	foreach($member as $hasil){ 
			    ?>
			      
			      <tr>
			        <td><?php echo $no++ ?></td>
			        <td><?php echo $hasil->nadep,$hasil->nabel?></td>
			        <td><?php echo $hasil->email ?></td>
			        <td><?php echo $hasil->notelpn ?></td>
			        <td>
			        	<a href="<?php echo base_url() ?>laporan/terima_member/<?php echo $hasil->noid ?>" class="btn btn-sm btn-success">Terima</a>
			        	<a href="<?php echo base_url() ?>laporan/hapus_member/<?php echo $hasil->noid ?>" class="btn btn-sm btn-danger">Tolak</a>
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