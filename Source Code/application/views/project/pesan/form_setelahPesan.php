<?php  $this->load->view('templates/header_baru');?>

    <div class="panel-heading">
     <?php echo $button; ?> Pemesanan
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
		<label>Nama Customer  :</label>
		<select class="form-control form-control-line" name="id_cus">
                                    <?php foreach ($customer as $key => $value) { ?>
                                        <option value="<?php echo $value->id_cus; ?>"><?php echo $value->nama_customer; ?></option>
                                        
                                          <?php } ?>
                                    </select>
	</div>
	
	<div class="form-group">
		<label>Studio  :</label>
		<select class="form-control form-control-line" name="id_studio">
                                    <?php foreach ($studio as $key => $value) { ?>
                                        <option value="<?php echo $value->id_studio; ?>"><?php echo $value->nama_studio; ?></option>
                                        
                                          <?php } ?>
                                    </select>
	</div>
		<div class="form-group">
	<input type="hidden" name="id_pesan" value="<?php echo $id_pesan; ?>">

	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
		</div>
</form>
<?php  $this->load->view('templates/footer_baru');?>