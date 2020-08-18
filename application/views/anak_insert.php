{$error}

<form name="anak_insert" method="post" action="{site_url('anak/insert_action')}" enctype="multipart/form-data">

	<table border="1" class="table table-striped">
		<tr>
			<td>Nama Ibu</td>
			<td>
				<select name="id_ibu" class="form-control">
					{foreach $daftar_ibu as $ibu}
					<option value="{$ibu.id_ibu}">{$ibu.nama_ibu}</option>
					{/foreach}
				</select>

			</td>
		</tr>
		<tr>
			<td>Nama Anak</td>
			<td>
				<input type="text" name="nama_anak" class="form-control">
				{form_error('nama_anak')}
			</td>
		</tr>
		<tr>
			<td>Gender Anak</td>
			<td>
				<div class="radio">
					<input type="radio" name="gender_anak" value="1" checked> Pria
				</div>
				<div class="radio">
					<input type="radio" name="gender_anak" value="2"> Wanita
				</div>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button class="btn btn-primary"><i class="fas fa-save"></i> Insert</button></td>
		</tr>
	</table>

</form>
