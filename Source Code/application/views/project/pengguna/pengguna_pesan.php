<?php $this->load->view('templates/header_baru');?>

<div class="col-md-12 text-right">
        <a href="<?php echo site_url('pengguna/pengguna_control/tambah') ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px;"><i class="fa fa-plus"></i> Tambah</a>
    </div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID Pesan</th>
			<th>ID film</th>
			<th>Nama Customer</th>
			<th>Studio</th>
		</tr>
</thead>
<tbody>
	<?php foreach ($customer as $key => $value) {?>
	<tr>
			<th><?php echo $value->id_pesan; ?></th>
			<th><?php echo $value->judul_film; ?></th>
			<th><?php echo $value->nama_customer; ?></th>
			<th><?php echo $value->studio; ?></th>	
		</tr>
		<?php }?>
</tbody>
	</table>

	

	

</div>

<?php $this->load->view('templates/footer_baru');?>

<script type="text/javascript">
	$(document).ready(function() {
	$('#example').DataTable();
} );
</script>