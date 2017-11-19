<?php $this->load->view('templates/header_baru');?>

<div class="col-md-12 text-right">
        <a href="<?php echo site_url('pesan/pesan_control/tambah') ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px;"><i class="fa fa-plus"></i> Tambah</a>
    </div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	 <thead>
                                        <tr>
                                     
                                            <th>ID Customer</th>
                                            <?php foreach ($customer as $key => $value) { ?>
                                     
                                           <td><?php echo $value->id_cus; ?></td>
                                             <?php } ?>
                                            
                                           
                                        </tr>
                                        <tr>
                                     
                                            <th>Nama Customer</th>
                                            <?php foreach ($customer as $key => $value) { ?>
                                     
                                           <td><?php echo $value->nama_customer; ?></td>
                                             <?php } ?>
                                            
                                           
                                        </tr>
                                        <tr>
                                     
                                            <th>Alamat</th>
                                            <?php foreach ($customer as $key => $value) { ?>
                                     
                                           <td><?php echo $value->alamat_customer; ?></td>
                                             <?php } ?>
                                            
                                           
                                        </tr>
                                        <tr>
                                     
                                            <th>Password</th>
                                            <?php foreach ($customer as $key => $value) { ?>
                                     
                                           <td><?php echo $value->pass; ?></td>
                                             <?php } ?>
                                            
                                           
                                        </tr>
                                        
                                    </thead>
</table>
 <?php foreach ($customer as $key => $value) { ?>
<button ><?php echo anchor(site_url("pengguna/pengguna_control/update/".$value->id_cus),
                    'Edit Data');?>&nbsp;</button><?php } ?>
<br><br>
</div>


<?php $this->load->view('templates/footer_baru');?>

<script type="text/javascript">
	$(document).ready(function() {
	$('#example').DataTable();
} );
</script>