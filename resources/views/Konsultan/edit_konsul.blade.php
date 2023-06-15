@extends('master.tampilan')
@section('title','Balas Konultasi')
@section('page','Halaman Balas Konsultasi')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
		
		<form method="post" action="/konsultan/proses/{{$data->id}}">
			@csrf
			<div class="grup">
			<label>Komentar Pasien</label>
			<textarea name="komentar_konsultan" id="editor1" readonly>{{$data->komentar_pasien}}</textarea>
	
		</div>

		<div class="grup">
			<label>Komenntar Anda</label>
			<textarea name="komentar_konsultan" id="editor2"></textarea>
			@error('komentar_konsultan')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

		<div class="grup">
			<label>Status</label>
			<select name="status" class="form-control">
				<option @if($data->status=='belum')selected @endif value="belum">Belum Konsultasi</option>
				<option @if($data->status=='konsultasi')selected @endif value="konsultasi" value="konsultasi">Konsultasi</option>
				<option @if($data->status=='selesai')selected @endif value="selesai">Selesai</option>
			</select>
			
		</div>
		<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Save</button>
		</form>


	</div>
</div>

@endsection