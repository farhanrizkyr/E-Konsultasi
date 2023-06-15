@extends('master.tampilan')
@section('title','Setting User')
@section('page','Setting User')
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
<div class="card" style="padding:22px;">
	<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" readonly class="form-control" value="{{Auth::user()->name}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Username</label>
      <input type="text" readonly class="form-control" value="{{Auth::user()->username}}">
    </div>

     <div class="form-group col-md-6">
      <label for="inputEmail4">E-Mail</label>
      <input type="text" readonly class="form-control" value="{{Auth::user()->email}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">ID User</label>
      <input type="text" readonly class="form-control" value="{{Auth::user()->id}}">
    </div>
  </div>

  
 <a href="/change-user/{{Auth::user()->username}}" class="btn btn-primary"><i class="fas fa-user-edit"></i> Edit</a>
</form>
</div>	





</div>



@endsection