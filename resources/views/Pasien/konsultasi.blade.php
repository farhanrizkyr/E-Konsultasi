@extends('master.tampilan')
@section('title','Konsultasi')
@section('page','Halaman Konsultasi')
@section('content')

	@if(Session::get('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> {{Session::get('pesan')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
	<br><br>
<div class="container-fluid">
	<a href="/pasien/buat-konsultasi" class="btn btn-primary mb-3 btn-sm"><i class="fas fa-plus"></i>  Buat Konsultasi</a>
	<div class="card" style="padding:22px">
		
			<div class="table-responsive">
				<table class="table" id="myTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul Konsultasi</th>
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
					<td>{!!$data->judul!!}</td>
					<td>
						@if($data->status=='belum')
						<span ><i class="fas fa-circle text-danger"></i> Belum Konsultasi</span>
						@endif
							@if($data->status=='konsultasi')
						<span ><i class="fas fa-circle text-warning"></i> Konsultasi</span>
						@endif
					</td>
					<td><a href="#" data-toggle="modal" data-target="#komentar-pasien{{$data->id}}">Tampilkan</a></td>
					<td><a href="#" data-toggle="modal" data-target="#komentar-konsultan{{$data->id}}">Tampilkan</a></td>
					<td>
							@if($data->status=='belum')
					<form method="post" action="/pasien/hapus/{{$data->id}}">
						@csrf
						@method('delete')
						<button class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')"><span ><i class="fas fa-trash"></i> Delete</button>
					</form>
						@endif
							@if($data->status=='konsultasi')
					<a href="/pasien/balas-konsultasi/{{$data->id}}" class="btn btn-warning btn-sm"><i class="fas fa-comments"></i> Balas</a>
						@endif
					</td>
				@endforeach
				</tr>
			</tbody>
			
		
		</table>
	</div>


	</div>
</div>

	

	@foreach($datas as $data)
	<div class="modal fade" id="komentar-pasien{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-comments"></i> Detail Komentar Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     	<div class="table-responsive">
     		 {!!$data->komentar_pasien!!}
     	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

	@endforeach


		@foreach($datas as $data)
	<div class="modal fade" id="komentar-konsultan{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-comments"></i> Detail Komentar Konsultan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     	<div class="table-responsive">
     		 {!!$data->komentar_konsultan!!}
     	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

	@endforeach

@endsection