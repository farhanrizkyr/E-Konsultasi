@extends('master.tampilan')
@section('title','Edit Pertemuan Konsultasi Pasien')
@section('page','Halaman Edit Pertemuan Pasien')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
		
		<form method="post" action="/konsultan/edit-jadwal-pasien-proses/{{$data->id}}">
			@csrf
			<div class="grup">
			<label>Topic Konsultasi</label>
			<input type="text" name="name" readonly class="form-control" value="{{$data->name}}" autocomplete="off">
			@error('name')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>
		<div class="grup">
			<label>Status</label>
			<select name="status" class="form-control">
				<option @if($data->status=='belum')selected  @endif value="belum">Belum DiTerima</option>
				<option  @if($data->status=='terima')selected  @endif value="terima">DiTerima</option>
				<option  @if($data->status=='tolak')selected  @endif value="tolak">DiTolak</option>
			</select>
		</div>

				<div class="grup">
			<label>Waktu Awal</label>
			<input type="datetime-local" readonly name="waktu_awal" class="form-control"  value="{{$data->waktu_awal}}" autocomplete="off">
			@error('waktu_awal')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

		<div class="grup">
			<label>Waktu Akhir</label>
			<input type="datetime-local" readonly name="waktu_akhir" class="form-control"  value="{{$data->waktu_akhir}}" autocomplete="off">
			@error('waktu_akhir')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

		<div class="grup">
			<label>Komentar Anda </label>
			<textarea name="komentar_konsultan" id="editor1"></textarea>
			@error('komentar_konsultan')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>
		<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Save</button>
		</form>


	</div>
</div>

@endsection