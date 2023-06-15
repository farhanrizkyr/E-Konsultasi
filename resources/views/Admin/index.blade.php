@extends('master.tampilan')
@section('title',' User')
@section('page','Halaman User')
@section('content')

	<br><br>
	@if(Session::get('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> {{Session::get('pesan')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="container-fluid">
	<a href="/admin/add-account" class="btn btn-primary btn-sm mb-4"><i class="fas fa-user-plus"></i> Tambah User</a>

	<div class="card" style="padding:22px">
		
		<div class="table-responsive">
				<table class="table" id="myTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Role</th>
					<th>E-Mail</th>
					<th>Aksi</th>
				</tr>
			</thead>
			
			<tbody>
			  @php $no=1; @endphp
			  @foreach($users as $user)
			  <tr>
			    <th>{{$no++;}}</th>
			    <td>{{$user->name}}</td>
			    <td>{{$user->username}}</td>
          <td>
            @if($user->role=='admin')
            <span class="badge badge-danger">Administrator</span>
            @endif
            @if($user->role=='konsultan')
            <span class="badge badge-warning">Konsultan</span>
            @endif
           @if($user->role=='pasien')
            <span class="badge badge-primary">Pasien</span>
            @endif
          </td>
          <td>{{$user->email}}</td>
          <td>
           <form method="post" action="/admin/hapus/{{$user->id}}" class="d-inline">
             @csrf
             @method('delete')
             <button onclick="return confirm ('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
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