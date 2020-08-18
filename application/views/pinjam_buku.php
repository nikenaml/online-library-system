<div id="container-fluid">

<h1 class="h3 mb-2 text-gray-800">Buku Dipinjam</h1>
<hr class="sidebar-divider">

<!--data peminjaman-->
<a href="{site_url('pinjam/read')}" class="btn btn-outline-primary"><i class="fas fa-chevron-left"></i> Daftar Peminjaman</a>
<br /><br />

<div class="row">

	<div class="col-md-6">
		<table class="table table-striped">
			<tr>
				<td>NIM</td>
				<td>{$data_pinjam.nim}</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>{$data_pinjam.nama_mahasiswa}</td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td>{$data_pinjam.tanggal_pinjam}</td>
			</tr>
		</table>
	</div>


	<div class="col-md-6">
		<!--form pinjam buku-->
		<form name="buku_insert" method="post" action="{site_url("pinjam/insert_buku_action/{$data_pinjam.id_pinjam}")}" enctype="multipart/form-data">

			<table class="table">
				<tr>
					<td width="20%">Kode Buku</td>
					<td>
						<input type="text" name="kode_buku" class="form-control" autofocus>
						{form_error('kode_buku')}

						<input type="hidden" name="id_pinjam" value="{$data_pinjam.id_pinjam}">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Buku Dipinjam</button></td>
				</tr>
			</table>
		</form>
	</div>

</div>

<!--daftar buku-->
<div class="row">
	{foreach $daftar_pinjam_buku as $pinjam_buku}
	<div class="col-sm-2">
		<div class="card shadow" style="width:12rem;">
		  <img class="card-img-top" src="{base_url("uploads/{$pinjam_buku.sampul_buku}")}" width="80" height="120" alt="Card image cap">

		  <div class="card-body">
		    <h5 class="card-title">{$pinjam_buku.judul_buku}</h5>
		  </div>
		</div>
	</div>
	{/foreach}
</div>

<!--end of body page-->

</div>
