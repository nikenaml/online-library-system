<div id="container-fluid">

<h1 class="h3 mb-2 text-gray-800">Daftar Ibu</h1>
<hr class="sidebar-divider">

<!--body page-->
<a href="<?php echo site_url('ibu/insert');?>" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br /><br />

<table border="1" class="table table-striped">
	<thead>
		<tr>
			<th>ID Ibu</th>
			<th>Nama Ibu</th>
			<th>Umur Ibu</th>
			<th>Foto Ibu</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($daftar_ibu as $ibu):?>
		<tr>
			<td><?php echo $ibu['id_ibu'];?></td>
			<td><?php echo $ibu['nama_ibu'];?></td>
			<td><?php echo $ibu['umur_ibu'];?></td>
			<td>
				<?php if($ibu['foto_ibu'] != ''):?>
				<img src="<?php echo base_url('uploads/'.$ibu['foto_ibu']);?>" width="100">
				<?php endif;?>
			</td>
			<td>
				<a href="<?php echo site_url('ibu/update/'.$ibu['id_ibu']);?>" class="btn btn-success" >
				<i class="fa fa-edit"></i> Update
				</a>
				
				<a href="<?php echo site_url('ibu/delete_action/'.$ibu['id_ibu']);?>" class="btn btn-danger">
				<i class="fa fa-trash"></i> Delete
				</a>
			</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>

<br />
<a href="<?php echo site_url('ibu/download');?>" class="btn btn-success"><i class="fas fa-download"></i> Download</a>
<!--end of body page-->

</div>