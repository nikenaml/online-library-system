<form name="anak_update" method="post" action="{site_url("anak/update_action/{$data_anak.id_anak}")}" enctype="multipart/form-data">

<table border="1" class="table table-striped">
	<tr>
		<td>Nama Ibu</td>
		<td>
			<select name="id_ibu" class="form-control">
				{foreach $daftar_ibu as $ibu}
					{if $ibu.id_ibu == $data_anak.id_ibu}
					<option value="{$ibu.id_ibu}" selected>{$ibu.nama_ibu}</option>
					{else}
					<option value="{$ibu.id_ibu}">{$ibu.nama_ibu}</option>
					{/if}
				{/foreach}
			</select>

		</td>
	</tr>
	<tr>
		<td>Nama Anak</td>
		<td>
			<input type="text" name="nama_anak" value="{$data_anak.nama_anak}"  class="form-control">
			<input type="hidden" name="nama_anak_old" value="{$data_anak.nama_anak}">
			{form_error('nama_anak')}
		</td>
	</tr>
	<tr>
			<td>Gender Anak</td>
			<td>
				{if $data_anak.gender_anak == 1}
					<div class="radio">
						<input type="radio" name="gender_anak" value="1" checked> Pria
					</div>
					<div class="radio">
						<input type="radio" name="gender_anak" value="2"> Wanita
					</div>
				{else}
					<div class="radio">
						<input type="radio" name="gender_anak" value="1"> Pria
					</div>
					<div class="radio">
						<input type="radio" name="gender_anak" value="2" checked> Wanita
					</div>
				{/if}

			</td>
		</tr>
	<tr>
		<td></td>
		<td><button class="btn btn-primary"><i class="fas fa-save"></i> Update</button></td>
	</tr>
</table>
</form>
