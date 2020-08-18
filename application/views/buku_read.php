<div id="container-fluid">

<h1 class="h3 mb-2 text-gray-800">Daftar Ibu</h1>
<hr class="sidebar-divider">

<!--body page-->
<a href="{site_url('buku/insert')}" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br /><br />

<table class="table table-striped table-hover" id="dataTable">
	<thead>
		<tr>
			<th>Sampul</th>
			<th>Kode</th>
			<th>Judul</th>
			<th>Stok</th>
		</tr>
	</thead>
	<tbody>
		{foreach $daftar_buku as $buku}
		<tr>
			<td>
				{if $buku.sampul_buku != ''}
				<img src="{base_url("uploads/{$buku.sampul_buku}")}" width="100">
				{/if}
			</td>
			<td>{$buku.kode_buku}</td>
			<td>{$buku.judul_buku}</td>
			<td><span class="badge badge-primary">{$buku.stok_buku} Buku</span></td>
		</tr>
		{/foreach}
	</tbody>
</table>

</div>


