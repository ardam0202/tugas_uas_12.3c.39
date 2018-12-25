<?php
include 'kepala.html';
?>
<div class="banner">
	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<div class="container">
				<div class="row mt3-3">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header" align="center">Form Registrasi</div>
						</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="form-group">
									<label for="nama_depan">Nama Depan</label>
									<input type="text" class="form-control" name="nama_depan" placeholder="Input Nama Depan">
								</div>
								<div class="form-group">
									<label for="nama_belakang">Nama Belakang</label>
									<input type="text" class="form-control" name="nama_belakang" placeholder="Input Nama Belakang">
								</div>
								<div class="form-group">
									<label for="email">Alamat Email</label>
									<input type="text" class="form-control" name="email" placeholder="Input Email Anda">
								</div>
								<div class="form-group">
									<label for="telepon">No Telepon</label>
									<input type="text" class="form-control" name="telepon" placeholder="Input No Telepon Anda">
								</div>
								<button type="Submit" name="register" class="btn btn-primary float-right">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'kaki.html';
?>