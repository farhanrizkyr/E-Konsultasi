@extends('master.tampilan')
@section('title','Balas Konultasi')
@section('page','Halaman Balas Konsultasi')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
		
		<form method="post" action="/pasien/proses/{{$data->id}}">
			@csrf
			<div class="grup">
			<label>Komentar Konsultan</label>
			<textarea name="komentar_konsultan" id="editor1" readonly>{{$data->komentar_konsultan}}</textarea>
			
		</div>

		<div class="grup">
			<label>Komenntar Anda</label>
			<textarea name="komentar_pasien" id="editor2"></textarea>
		</div>
		<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Save</button>
		</form>


	</div>
</div>

@endsection