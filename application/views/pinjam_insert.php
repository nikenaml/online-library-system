<form name="pinjam_insert" method="post" action="{site_url('pinjam/insert_action')}" enctype="multipart/form-data">

	<table border="1" class="table table-striped">
		<tr>
			<td>NIM</td>
			<td>
				<input type="text" name="nim" class="form-control" autofocus>
				{form_error('nim')}
			</td>
		</tr>
		<tr>
			<td>Tanggal Pinjam</td>
			<td>
				<input type="date" name="tanggal_pinjam" value="{date('Y-m-d')}" class="form-control" autofocus>
				{form_error('tanggal_pinjam')}
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button></td>
		</tr>
	</table>

</form>