@extends('master.tampilan')
@section('title','Buat Pertemuan Konsultasi')
@section('page','Halaman Buat Pertemuan')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
		
		<form method="post" action="">
			@csrf
			<div class="grup">
			<label>Judul Konsultasi</label>
			<textarea id="editor1" name="judul"></textarea>
			@error('judul')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

		
		<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Save</button>
		</form>


	</div>
</div>

@endsection