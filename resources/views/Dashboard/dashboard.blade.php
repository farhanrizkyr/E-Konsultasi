@extends('master.tampilan')
@section('title','Dashboard')
@section('page','Halaman Dashboard')
@section('content')

<div class="container-fluid">

	  <div class="row mb-3">
			  	@if(Auth::user()->role=='admin')
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$t_u}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Konsultasi Pasien</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$t_k}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Belum DiTanggapi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$b_k}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times-circle fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Sudah DiTanggapi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$s_k}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endif

             <!---EndContent-->

            </div>
	
			  <div class="row mb-3">
			  	@if(Auth::user()->role=='pasien')
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Konsultasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{Auth::user()->users->count()}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Sudah Ditanggapi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$e_k_p}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Belum Ditanggapi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$b_k_p}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Sedang Konsultasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$s_k_p}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endif

             <!---EndContent-->

            </div>

             <div class="row mb-3">
			  	@if(Auth::user()->role=='konsultan')
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Konsultasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$t_k}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Belum Konsultasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$b_k}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times-circle fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Sudah Konsultasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$s_k}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Sedang Konsultasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$s_s}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-sync fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endif

             <!---EndContent-->

            </div>
</div>

@endsection