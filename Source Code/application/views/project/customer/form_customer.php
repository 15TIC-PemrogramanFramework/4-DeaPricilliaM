<?php  $this->load->view('templates/header_baru');?>
    <div class="panel-heading">
     <?php echo $button; ?> Customer
    </div>

<form action="<?php echo $aksi; ?>" method="POST">
	
	<div class="form-group">
		<label>Username :</label>
		<input type="text" name="nama_customer" class="form-control"
		placeholder="Inputkan nama customer" required value="<?php echo $nama_customer; ?>">
	</div>

	<div class="form-group">
		<label>Password :</label>
		<input type="text" name="pass" class="form-control"
		placeholder="Inputkan Password" required value="<?php echo $pass; ?>">
	</div>

	<div class="form-group">
		<label>Alamat :</label>
		<input type="text" name="alamat_customer" class="form-control"
		placeholder="Inputkan alamat customer" required value="<?php echo $alamat_customer; ?>">
	</div>

	<div class="form-group">
		<label>Jenis Kelamin :</label>
		<input type="text" name="jenis_kelamin" class="form-control"
		placeholder="Inputkan Jenis Kelamin" required value="<?php echo $jenis_kelamin; ?>">
	</div>

	<div class="form-group">
	<input type="hidden" name="id_cus" value="<?php echo $id_cus ?> ">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
	</div>
</form>
	<?php  $this->load->view('templates/footer_baru');?>