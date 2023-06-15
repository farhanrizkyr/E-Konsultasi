@extends('master.tampilan')
@section('title','Jadwal Pertemuan Pasien')
@section('page','Halaman Jadwal Pertemuan Pasien')
@section('content')
<div class="card" style="padding:11px;">
<div class="container-fluid">
		@if(Session::get('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> {{Session::get('pesan')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
	<br><br>
		<a href="/pasien/buat-jadwal/" class="btn btn-primary mb-3 btn-sm"><i class="fas fa-plus"></i> Buat Pertemuan</a>
<div class="table-responsive">
				<table class="table mt-3" id="myTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Pasien</th>
					<th>Topic  Pertemuan</th>
					<th>Waktu Awal</th>
					<th>Waktu Akhir</th>
					<th>Status</th>
					<th>Komentar Pasien</th>
					<th>Komentar Anda</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php $no=1; ?>
				@foreach($datas as $data)
				<tr>
					<th>{{$no++;}}</th>
					<td>{{$data->user->name}}</td>
					<td>{{$data->name}}</td>
					<td>{{$data->waktu_awal}}</td>
					<td>{{$data->waktu_akhir}}</td>
					<td>
							@if($data->status=='belum')
						<span ><i class="fas fa-exclamation text-warning"></i> Belum </span>
						@endif

						@if($data->status=='tolak')
						<span ><i class="fas fa-times-circle text-danger"></i> Ditolak</span>
						@endif

						@if($data->status=='terima')
						<span ><i class="fas fa-check text-success"></i> Diterima</span>
						@endif

						@if($data->status=='ulang')
						<span ><i class="fas fa-sync text-primary"></i> Pengajuan Ulang</span>
						@endif
					</td>

					<td>{!!$data->komentar_pasien!!}</td>
					<td>{!!$data->komentar_konsultan!!}</td>
					<td>
			         <a href="/konsultan/edit-jadwal-pasien/{{$data->id}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>


		</table>
	</div>

	</div>
	</div>


@endsection