@extends('master.tampilan')
@section('title','Jadwal Pertemuan')
@section('page','Halaman Jadwal Pertemuan')
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
					<th>Topic  Pertemuan</th>
					<th>Waktu Awal</th>
					<th>Waktu Akhir</th>
					<th>Status</th>
					<th>Komentar Anda</th>
					<th>Komentar Konsultan</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php $no=1; ?>
				@foreach($datas as $data)
				<tr>
					<th>{{$no++;}}</th>
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
							@if($data->status=='belum')
							<form method="post" action="/pasien/hapus-jadwal/{{$data->id}}" class="d-inline">
								@csrf
								@method('delete')
								<button onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
							</form>
						@endif

						@if($data->status=='terima')
					<button disabled class="btn btn-default btn-sm"><i class="fas fa-ban"></i> Edit</button>
						@endif

						@if($data->status=='ulang')
						<form method="post" action="/pasien/hapus-jadwal/{{$data->id}}" class="d-inline">
								@csrf
								@method('delete')
								<button onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
							</form>
							
								<a href="/pasien/edit-jadwal/{{$data->id}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Pengajuan Ulang</a>
						
						@endif


						@if($data->status=='tolak')
						<form method="post" action="/pasien/hapus-jadwal/{{$data->id}}" class="d-inline">
								@csrf
								@method('delete')
								<button onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
							</form>
							
								<a href="/pasien/edit-jadwal/{{$data->id}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Ubah Pengajuan</a>
							
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>


		</table>
	</div>

	</div>
	</div>


@endsection