<nav class="jumbotron">
	<nav class="container">
		<?php echo form_open('part/edit');?>
		<?php echo form_hidden('id',$datapart[0]->id);?>
		<center>
			<h3>Form Edit Data</h3><br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-7">
				<table class="table">
				    <tr><td>ID</td><td><?php echo form_input('',$datapart[0]->id,'class="form-control" id="disabledInput" disabled=""');?></td></tr>
				    <tr><td>NAMA</td><td><?php echo form_input('nama',$datapart[0]->nama, 'class="form-control"');?></td></tr>
				    <tr><td>NOMOR</td><td><?php echo form_input('nomor_seri',$datapart[0]->nomor_seri, 'class="form-control"');?></td></tr>
				    <tr><td>MERK</td><td><?php echo form_input('merk',$datapart[0]->merk, 'class="form-control"');?></td></tr>
				    <tr><td>HARGA</td><td><?php echo form_input('harga',$datapart[0]->harga, 'class="form-control"');?></td></tr>
				    <tr><td colspan="2">
				        <?php echo form_submit('submit','Simpan', 'class = "btn btn-info"');?>
				        <?php echo anchor('part','Kembali', 'class = "btn btn-primary"');?></td></tr>
				</table>
					
				</div>
			</div>
		</center>
		<?php
		echo form_close();
		?>
		
	</nav>
</nav>