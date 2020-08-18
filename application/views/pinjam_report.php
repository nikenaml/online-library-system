<div id="container-fluid">

<h1 class="h3 mb-2 text-gray-800">Laporan Peminjaman</h1>
<hr class="sidebar-divider">

<!--body page-->

<table class="table table-striped table-hover" id="dataTable">
	<thead>
		<tr>
			<th>Tanggal</th>
			<th>Buku Dipinjam</th>
		</tr>
	</thead>
	<tbody>
		{foreach $daftar_pinjam as $pinjam}
		<tr>
			<td>{$pinjam.tanggal_pinjam}</td>
			<td><span class="badge badge-primary">{$pinjam.total_buku} Buku</span></td>
		</tr>
		{/foreach}
	</tbody>
</table>

<br />
<a href="{site_url('pinjam/download')}" class="btn btn-success"><i class="fas fa-download"></i> Download</a>
<!--end of body page-->

</div>
