@extends('master.tampilan')
@section('title','Tambah User')
@section('page','Halaman Tambah User')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
		<form method="post" action="">
			@csrf
			<div class="grup">
			  <label for="">Nama</label>
			<input type="text" name="name" class="form-control @error('name')is-invalid @enderror" autocomplete="off">
			@error('name')
     <p class="text-danger">{{$message}}</p>
			@enderror
			</div>
			
						<div class="grup">
			  <label for="">Username</label>
			<input type="text" name="username" class="form-control @error('username')is-invalid @enderror" autocomplete="off">
			@error('username')
     <p class="text-danger">{{$message}}</p>
			@enderror
			</div>
			
			<div class="grup">
			  <label for="">E Mail</label>
			<input type="text" name="email" class="form-control @error('email')is-invalid @enderror" autocomplete="off">
			@error('email')
     <p class="text-danger">{{$message}}</p>
			@enderror
			</div>
			
			<div class="grup">
			  <label for="">Role</label>
        <select name="role" class="form-control">
          <option value="">----Pilih----</option>
          <option value="admin">Admin</option>
        <option value="konsultan">Konsultan</option>
          <option value="pasien">Pasien</option>
        </select>
			@error('role')
     <p class="text-danger">{{$message}}</p>
			@enderror
			</div>
			<div class="grup">
			  <label for="">Password</label>

			<input type="password" name="password" class="form-control @error('password')is-invalid @enderror" autocomplete="off">
			@error('password')
     <p class="text-danger">{{$message}}</p>
			@enderror
			</div>
			
			<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Save</button>
		</form>

	</div>
</div>

@endsection