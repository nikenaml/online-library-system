<div id="container-fluid">

<h1 class="h3 mb-2 text-gray-800">Daftar Anak</h1>
<hr class="sidebar-divider">

<a href="{site_url('anak/insert')}" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br /><br />

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>ID Anak</th>
			<th>Nama Ibu</th>
			<th>Nama Anak</th>
			<th>Gender Anak</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		{foreach $daftar_anak as $anak}
		<tr>
			<td>{$anak.id_anak}</td>
			<td>{$anak.nama_ibu}</td>
			<td>{$anak.nama_anak}</td>
			<td>
				{if $anak.gender_anak == 1}
					Pria
				{else}
					Wanita
				{/if}
			</td>
			<td>
				<a href="{site_url("anak/update/{$anak.id_anak}")}" class="btn btn-success" >
				<i class="fa fa-edit"></i> Update
				</a>

				<a href="{site_url("anak/delete_action/{$anak.id_anak}")}" class="btn btn-danger">
				<i class="fa fa-trash"></i> Delete
				</a>
			</td>
		</tr>
		{/foreach}
	</tbody>
</table>
<!--end of body page-->

</div>
