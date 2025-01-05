@extends('back-end.layouts.component')
@section('content')

        <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{ url('/profile') }}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                  
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            
                        <a href="" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                    </form>
                    
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        </header>



      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-3">Formulir Halaman Tambah Data Proyek</h5>
              

              <div class="card">
              <div class="card-body">
                    <div class="d-flex align-items-center pb-2">

                        <ul class="list-unstyled d-flex align-items-center mb-0">
                          <li class="me-2"><a href="{{ route('admin.project.index') }}" class="btn btn-primary">C_Data</a></li>
                          <li class="me-2"><a href="{{ url('/') }}" target="_blank" class="btn btn-outline-success">C_Page</a></li>
                        </ul>

                    </div>      
                    
                </div>
              </div>
              
              <div class="card">
                <div class="card-body">
                <div class="alert alert-secondary text-center" role="alert">
                  Form Tambah Data Proyek 
                </div>
                  <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Paragraf Portfolio</label>
                        <input type="text" name="paragraf_portfolio" class="form-control" id="" aria-describedby="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description Portfolio (500)</label>
                        <textarea name="desc_portfolio" class="form-control" cols="15" rows="15"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Button Portfolio</label>
                        <input type="text" name="button_portfolio" class="form-control" id="" aria-describedby="" value="">
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Uploading Image Card (500 x 500)</label>
                        <input type="file" name="image_portfolio" class="form-control" id="" aria-describedby="" value="">
                       
                    </div>
                    
                    <br>
                   
              
                    
                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Tambah Data</button>
                    
                  </form>
                </div>


                
              </div>

              

    
            </div>
          </div>
        </div>
      </div>


@endsection