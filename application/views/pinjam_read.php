<div id="container-fluid">

<h1 class="h3 mb-2 text-gray-800">Daftar Peminjaman</h1>
<hr class="sidebar-divider">

<!--body page-->
<a href="{site_url('pinjam/insert')}" class="btn btn-primary"><i class="fas fa-plus"></i> Peminjaman Baru</a>
<br /><br />

<table class="table table-striped table-hover" id="dataTable">
	<thead>
		<tr>
			<th>Tanggal</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		{foreach $daftar_pinjam as $pinjam}
		<tr>
			<td>{$pinjam.tanggal_pinjam}</td>
			<td>{$pinjam.nim}</td>
			<td>{$pinjam.nama_mahasiswa}</td>
			<td>
				<a href="{site_url("pinjam/buku/{$pinjam.id_pinjam}")}" class="btn btn-success" >
				<i class="fa fa-book"></i> Buku
				</a>

				<a href="{site_url("pinjam/kembali/{$pinjam.id_pinjam}")}" class="btn btn-primary" onclick="return confirm('Anda yakin?')">
				<i class="fa fa-reply"></i> Pengembalian
				</a>
			</td>
		</tr>
		{/foreach}
	</tbody>
</table>

<!--end of body page-->

</div>
