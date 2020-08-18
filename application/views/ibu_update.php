<form name="ibu_update" method="post" action="{site_url("ibu/update_action/{$data_ibu.id_ibu}")}" enctype="multipart/form-data">

<table border="1" class="table table-striped">
	<tr>
		<td>Nama Ibu</td>
		<td>
			<input type="text" name="nama_ibu" value="{$data_ibu.nama_ibu}"  class="form-control">
			<input type="hidden" name="nama_ibu_old" value="{$data_ibu.nama_ibu}">
			{form_error('nama_ibu')}
		</td>
	</tr>
	<tr>
		<td>Umur Ibu</td>
		<td>
			<input type="text" name="umur_ibu" value="{$data_ibu.umur_ibu}"  class="form-control">
			{form_error('umur_ibu')}
		</td>
	</tr>
	<tr>
			<td>Foto Ibu</td>
			<td>
				<input type="file" name="userfile" class="form-control">
				{form_error('foto_ibu')}
				
				<br />
				{if $data_ibu.foto_ibu != ''}
				<img src="{base_url("uploads/{$data_ibu.foto_ibu}")}" width="100">
				{/if}
				
			</td>
		</tr>
	<tr>
		<td></td>
		<td><button class="btn btn-primary"><i class="fas fa-save"></i> Update</button></td>
	</tr>
</table>

</form>