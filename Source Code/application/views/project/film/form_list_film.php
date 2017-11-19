<?php $this->load->view('templates/header_baru');?>
    <div class="panel-heading">
     Data Film
    </div>
<?php
$status = $this->session->userdata('status');
  if($status == 'admin') { ?>
<div class="col-md-12 text-right">
		<a href="<?php echo site_url('film/film_control/tambah') ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px;"><i class="fa fa-plus"></i> Tambah</a>
	</div>
	<?php } ?>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID Film</th>
			<th>Judul film</th>
			<th>Rating film</th>
			<th>Durasi film</th>
			<th>Kategori</th>
			<th>Jam Tayang</th>
			<?php if($status == 'admin') { ?>
			<th>Aksi</th>
			<?php } ?>
</tr>
</thead>
<tbody>
	<?php foreach ($film as $key => $value) {?>
	<tr>
			<th><?php echo $value->id_film; ?></th>
			<th><?php echo $value->judul_film; ?></th>
			<th><?php echo $value->rating_film; ?></th>
			<th><?php echo $value->durasi_film; ?></th>	
			<th><?php echo $value->kategori; ?></th>
			<th><?php echo $value->jam_tayang; ?></th>
			<?php if($status == 'admin') { ?>
			<th>
				<center>
				<a href="<?php echo site_url('film/film_control/delete/'.$value->id_film); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
				<a href="<?php echo site_url('film/film_control/update/'.$value->id_film); ?>" class="btn btn-warning">
					<i class="fa fa-pencil"></i>
				</a>
				</center>
			</th>
			<?php } ?>
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