<?php  $this->load->view('templates/header_baru');?>

    <div class="panel-heading">
     <?php echo $button; ?> Film
    </div>

<form action="<?php echo $aksi; ?>" method="POST">
	

	<div class="form-group">
		<label>Judul Film :</label>
		<input type="text" name="judul_film" class="form-control"
		placeholder="Inputkan Judul film" required value="<?php echo $judul_film; ?>">
	</div>

	<div class="form-group">
		<label>Rating film :</label>
		<input type="text" name="rating_film" class="form-control"
		placeholder="Inputkan rating film" required value="<?php echo $rating_film; ?>">
	</div>
	<div class="form-group">
		<label>Durasi  :</label>
		<input type="text" name="durasi_film" class="form-control"
		placeholder="Inputkan Durasi" required value="<?php echo $durasi_film; ?>">
	</div>
	
	<div class="form-group">
		<label>Kategori  :</label>
		<input type="text" name="kategori" class="form-control"
		placeholder="Inputkan kategori" required value="<?php echo $kategori; ?>">
	</div>
	<div class="form-group">
		<label>Jam Tayang  :</label>
		<input type="text" name="jam_tayang" class="form-control"
		placeholder="Inputkan Jam Tayang" required value="<?php echo $jam_tayang; ?>">
	</div>

	<div class="form-group">
	<input type="hidden" name="id_film" value="<?php echo $id_film; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</div>
</form>
<?php  $this->load->view('templates/footer_baru');?>