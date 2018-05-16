<nav class="jumbotron">
	<nav class="container">
		<?php echo form_open_multipart('part/create');?>
		<center>
			<h3>Form Tambah Data</h3><br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-7">
					<table class="table">
					    <tr><td>NAMA</td><td><?php echo form_input('nama','', 'class="form-control" placeholder="Input disini"');?></td></tr>
					    <tr><td>NOMOR SERI</td><td><?php echo form_input('nomor_seri','', 'class="form-control" placeholder="Input disini. Ex: 123-2333-23"');?></td></tr>
					    <tr><td>MERK</td><td><?php echo form_input('merk','', 'class="form-control" placeholder="Input disini"');?></td></tr>
					    <tr><td>HARGA</td><td><?php echo form_input('harga','', 'class="form-control" placeholder="Input disini"');?></td></tr>        
					    <tr><td colspan="2">
					        <?php echo form_submit('submit','Simpan', 'class = "btn btn-info"');?>
					        <?php echo anchor('part','Kembali', 'class = "btn btn-primary"');?></td></tr>
					</table>
					<?php
					echo form_close();
					?>
				</div>
			</div>
		</center>
		
	</nav>
</nav>