@extends('master.tampilan')
@section('title','History')
@section('page','Halaman History')
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
						@if($data->status=='selesai')
						<span ><i class="fas fa-circle text-success"></i> Selesai Konsultasi</span>
						@endif
					</td>
					<td>{!!$data->komentar_pasien!!}</td>
					<td>{!!$data->komentar_konsultan!!}</td>
					<td>
					<form method="post" action="/pasien/history-konsultasi/try/{{$data->id}}">
						@csrf
						<button class="btn btn-info btn-sm" onclick="return confirm('Yakin Ingin Konsultasi Ulang ?')"><span ><i class="fas fa-sync"></i>Konsultasi Ulang</button>
					</form>
	
					</td>
				@endforeach
				</tr>
			</tbody>
			
		
		</table>
	</div>


	</div>
</div>

@endsection