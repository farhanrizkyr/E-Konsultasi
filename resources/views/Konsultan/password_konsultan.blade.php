@extends('master.tampilan')
@section('title','Change Password')
@section('page','Halaman Change Password')
@section('content')
<div class="container">
	    @if(Session::get('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> {{Session::get('pesan')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
  <br><br>
<div class="card" style="padding:23px;">

<form method="post" action="">
	@csrf
	<div class="grup">
		<label>Password Lama</label>
		<input type="password" name="password_old" class="form-control">
		@error('password_old')
		<p class="text-danger">{{$message}}</p>
		@enderror
	</div>
	<div class="grup">
		<label>Password Baru</label>
		<input type="password" name="new_password" class="form-control">
		@error('new_password')
			<p class="text-danger">{{$message}}</p>
		@enderror
	</div>

		<div class="grup">
		<label>Konfirmasi Password Baru</label>
		<input type="password" name="confirm_password" class="form-control">
		@error('confirm_password')
			<p class="text-danger">{{$message}}</p>
		@enderror
	</div>


	<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Update</button>
</form>
</div>

</div>
@endsection