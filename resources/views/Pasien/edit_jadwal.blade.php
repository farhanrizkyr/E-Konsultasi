@extends('master.tampilan')
@section('title','Edit Pertemuan Konsultasi')
@section('page','Halaman Edit Pertemuan')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
		
		<form method="post" action="/pasien/proses-edit-jadwal/{{$data->id}}">
			@csrf
			<div class="grup">
			<label>Topic Konsultasi</label>
			<input type="text" name="name" class="form-control" value="{{$data->name}}" autocomplete="off">
			@error('name')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

				<div class="grup">
			<label>Waktu Awal</label>
			<input type="datetime-local" name="waktu_awal" class="form-control"  value="{{$data->waktu_awal}}" autocomplete="off">
			@error('waktu_awal')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

		<div class="grup">
			<label>Waktu Akhir</label>
			<input type="datetime-local" name="waktu_akhir" class="form-control"  value="{{$data->waktu_akhir}}" autocomplete="off">
			@error('waktu_akhir')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

		<div class="grup">
			<label>Komentar Anda (Optional)</label>
			<textarea name="komentar_pasien" id="editor1"></textarea>
			
		</div>
		<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Save</button>
		</form>


	</div>
</div>

@endsection