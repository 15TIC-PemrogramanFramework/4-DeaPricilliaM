<?php  $this->load->view('templates/header_baru');?>

    <div class="panel-heading">
     <?php echo $button; ?> Izin Film
    </div>
<form action="<?php echo $aksi; ?>" method="POST">
	

	

	<div class="form-group">
		<label>Nama Film :</label>
		<select class="form-control form-control-line" name="id_film">
                                    <?php foreach ($film as $key => $value) { ?>
                                        <option value="<?php echo $value->id_film; ?>"><?php echo $value->judul_film; ?></option>
                                        
                                          <?php } ?>
                                    </select>
	</div>
	<div class="form-group">
		<label>Nama Lembaga  :</label>
		<select class="form-control form-control-line" name="id_lembaga">
                                    <?php foreach ($lembaga as $key => $value) { ?>
                                        <option value="<?php echo $value->id_lembaga; ?>"><?php echo $value->nama_lembaga; ?></option>
                                        
                                          <?php } ?>
                                    </select>
	</div>

	<div class="form-group">
		<label>Status  :</label>
	         <select class="name" name="status">  
                                    <option value="diSetujui">Disetujui</option>
                                    <option value="Tidak diSetujui">Tidak Disetujui</option>
                                        
                                        
                                    </select> 
                                </div>
	
	<div class="form-group">
	<input type="hidden" name="id_izin" value="<?php echo $id_izin; ?>">

	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</div>
</form>
<?php  $this->load->view('templates/footer_baru');?>