
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
                  <img src="{{asset('templeate/src/assets/images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">{{ Auth::user()->name }}</p>
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
          <div class="card">
            <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Formulir Halaman Pengenalan Diri</h5>
                

              <div class="card">
              <div class="card-body">
                  <div class="d-flex align-items-center pb-2">

                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li class="me-2"><a href="{{ url('') }}" target="_blank" class="btn btn-outline-success">C_Page</a></li>
                    <li class="me-2">
                    @if ($summary->resume)

                      <a class="me-1 d-flex align-items-center btn btn-outline-primary" href="{{ route('admin.resume.unduh') }}">Unduh CV </a>

                    @endif 

                      

                    
                    </li>
                  </ul>

                  </div>              
                </div>
              </div>


                <div class="alert alert-secondary text-center" role="alert">
                  Form Update Pengenalan Diri  
                </div>
                  <form action="{{ route('admin.summary.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Span Title</label>
                        <input type="text" name="span_title" class="form-control" id="" aria-describedby="" value="{{$summary->span_title}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Heading Title</label>
                        <input type="text" name="heading_title" class="form-control" id="" aria-describedby="" value="{{$summary->heading_title}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description Title </label>
                        <textarea name="desc_title" class="form-control" cols="15" rows="15" >{!! $summary->desc_title !!}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Translate Java </label>
                        <textarea name="java" class="form-control" cols="15" rows="15" >{!! $summary->java !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Translate Japanese </label>
                        <textarea name="japanese" class="form-control" cols="15" rows="15" >{!! $summary->japanese !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Translate Korean </label>
                        <textarea name="korean" class="form-control" cols="15" rows="15" >{!! $summary->korean !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Translate Arabic </label>
                        <textarea name="arabic" class="form-control" cols="15" rows="15" >{!! $summary->arabic !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Translate Russian </label>
                        <textarea name="russian" class="form-control" cols="15" rows="15" >{!! $summary->russian !!}</textarea>
                    </div>
                    

                    <div class="mb-3">
                        <label for="" class="form-label">Uploading Resume</label>
                        <input type="file" name="resume" class="form-control" id="" aria-describedby="" value="">
                        
                    </div>
                    
                    <br>
                   
                    
                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Update</button>
                  </form>
                </div>
          </div>
        </div>



     
     
    

@endsection