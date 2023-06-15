@extends('master.tampilan')
@section('title','Buat Pertemuan Konsultasi')
@section('page','Halaman Buat Pertemuan')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
		
		<form method="post" action="">
			@csrf
			<div class="grup">
			<label>Topic Konsultasi</label>
			<input type="text" name="name" class="form-control" autocomplete="off">
			@error('name')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

				<div class="grup">
			<label>Waktu Awal</label>
			<input type="datetime-local" name="waktu_awal" class="form-control" autocomplete="off">
			@error('waktu_awal')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

		<div class="grup">
			<label>Waktu Akhir</label>
			<input type="datetime-local" name="waktu_akhir" class="form-control" autocomplete="off">
			@error('waktu_akhir')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>
		<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Save</button>
		</form>


	</div>
</div>

@endsection