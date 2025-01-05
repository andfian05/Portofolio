
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
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">スキャンデータ。</h5>

              <!-- <div class="card-body">
                  <div class="d-flex align-items-center pb-2">

                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li class="me-2"><a href="{{ url('') }}" target="_blank" class="btn btn-outline-success">C_Page</a></li>
                    <li class="me-2">
                   

                      <a class="me-1 d-flex align-items-center btn btn-outline-primary" href="">Unduh CV </a>

                    
                    </li>
                  </ul>

                  </div>              
                </div>
              </div> -->

                            <div class="table-responsive" id="no-more-tables">
    
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <!-- <th scope="col">Password</th> -->
                                    
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">

                                        @foreach ($users as $user)
                                        <tr>
                                            <td scope="row" data-title="No" class="text-center">{{ $loop->iteration }}</td>
                                            <td data-title="Nama">{{ $user->name }}</td>
                                            <td data-title="Email">{{ $user->email }}</td>
                                            <!-- <td data-title="Password">{{ $user->password }}</td> -->
                                           
                                            <th class="d-flex justify-content-center">
                                                <!-- <a class="btn btn-secondary btn-sm me-2"
                                                    href=""> Melihat</a> -->
                                                <a class="btn btn-warning btn-sm me-1 col-md-5 offset-md-1"
                                                    href=""> Update</a>
                                                <a class="btn btn-danger btn-sm me-1 col-md-5 offset-md-1"
                                                    href=""> Hapus</a>

                                                   
                                            </th>
                                        </tr>
                                        @endforeach
                                        

    
                                </tbody>
                              </table>

                              
                            </div>

       


              <!-- <div class="card">
                <div class="card-body">
                  <form action="" method="POST">
                  

                    <div class="mb-3">
                      <label for="name" class="form-label">Complete Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="">
                      

                    </div>
                    
                   
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div> -->

              <!-- <div class="card">
                <div class="card-body">
                  <form action="" method="POST">
                    

                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" value="">
                     
                    
                    </div>

                    <div class="mb-3">
                      <label for="update_password_current_password" class="form-label">Current Password</label>
                      <input type="password" class="form-control" id="update_password_current_password" name="current_password" autocomplete="current-password">
                     
                     
                    </div>
                    <div class="mb-3">
                      <label for="update_password_password" class="form-label">New Password</label>
                      <input type="password" class="form-control" id="update_password_password" name="email" autocomplete="new-password">
                      
                     
                    </div>
                    

                    <div class="mb-3">
                      <label for="update_password_password_confirmation" class="form-label">Cofirm Password</label>
                      <input class="form-control" id="update_password_password_confirmation" name="password_confirmation" type="password"  autocomplete="new-password">
                      
                      
                     
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

              
                </div>
              </div> -->
             

            </div>
          </div>
        </div>
      </div>



     
     
    

@endsection