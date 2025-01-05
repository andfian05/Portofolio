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
            <h5 class="card-title fw-semibold mb-3">Formulir Halaman Pendidikan</h5>
                

              <div class="card">
              <div class="card-body">
                  <div class="d-flex align-items-center pb-2">

                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li class="me-2"><a href="{{ url('/') }}" target="_blank" class="btn btn-outline-success">C_Page</a></li>
                    <li class="me-2"><a href="{{ route('admin.education.create') }}" class="btn btn-primary">Tambah Data</a></li>
                    
                  </ul>

                  </div>              
                </div>
              </div>


                <div class="alert alert-secondary text-center" role="alert">
                     Tabel Halaman Pendidikan
                </div>

                            <div class="table-responsive" id="no-more-tables"> 
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col">Paragraf Education</th>
                                        <th scope="col">Description Education</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                  
                                        @foreach ($educs as $edu)
                                        <tr>
                                            <td scope="row" data-title="No" class="text-center">{{ $loop->iteration }}</td>
                                            <td data-title="Paragraf">{{ $edu->paragraf_edu }}</td>
                                            <td data-title="Desc">{{ $edu->desc_edu }}</td>
                                            
                                           
                                            <th class="d-flex justify-content-center">
                                                <a class="btn btn-secondary btn-sm me-2"
                                                    href="{{ route('admin.education.show', $edu->id) }}"> Detail</a>
                                                <a class="btn btn-warning btn-sm me-2"
                                                    href="{{ route('admin.education.edit', $edu->id) }}"> Update</a>
                                                <form method="POST" action="{{ route('admin.education.destroy', $edu->id) }}"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                                                </form>

                                               
                                                
                                                
                                            </th>
                                        </tr>
                                        @endforeach
                                        
                                </tbody>
                              </table>  
                            </div>
                    <br>
                </div>
          </div>
        </div>



     
     
    


@endsection


