@extends('master.tampilan')
@section('title','Setting User')
@section('page','Setting User')
@section('content')
<div class="container">
<div class="card" style="padding:22px;">
	<form method="post" action="/proses-change-user/{{Auth::user()->id}}">
		@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name"  class="form-control" value="{{Auth::user()->name}}">
      @error('name')
      <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Username</label>
      <input type="text" name="username"  class="form-control" value="{{Auth::user()->username}}">
       @error('username')
      <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

     <div class="form-group col-md-6">
      <label for="inputEmail4">E-Mail</label>
      <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}">
       @error('email')
      <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
  
  </div>

  
<button class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
</form>
</div>	





</div>



@endsection