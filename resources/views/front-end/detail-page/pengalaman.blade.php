@extends('front-end.component.index')
@section('content')


    <script src="{{asset('templeate_2/dist/js/demo-theme.min.js?1692870487') }}"></script>
    <div class="page">

    
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Overview
                </div>
                <h2 class="page-title">
                  My Resume
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                  <span class="d-none d-sm-inline">
                   
                    <a href="https://drive.google.com/drive/folders/1rVGckCHDWOTHIlVE68hC7PaYpU6rjzmF?usp=sharing" class="btn" target="_blank" rel="noreferrer">
                   
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mood-smile-beam">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />
                    <path d="M10 10c-.5 -1 -2.5 -1 -3 0" />
                    <path d="M17 10c-.5 -1 -2.5 -1 -3 0" />
                    <path d="M14.5 15a3.5 3.5 0 0 1 -5 0" />
                    </svg>
                    Source Code
                    </a>
                  </span>
                  <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                        </a>
              


                   </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>



        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
             
                    <div class="col-sm-3 col-lg-6">
                      <div class="dropdown-menu dropdown-menu-demo dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">
                        Work, Organization, And Volunteer Experience
                          <span class="badge bg-dark text-primary-fg ms-auto"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-half-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 3v18" /><path d="M12 14l7 -7" /><path d="M12 19l8.5 -8.5" /><path d="M12 9l4.5 -4.5" /></svg></span>
                        </a>
                        
                      </div>
                    </div>
           
              <div class="col-lg-12">
                <div class="card">
                    
                
                  <div class="card-body">
                    <!-- <h3 class="card-title mb-5">Work, Organization, And Volunteer Experience </h3> -->
                    
                    <ul class="steps steps-vertical">

                    @foreach ($exp as $exp)
                      <li class="step-item">
                        <div class="h4 m-0 mb-2">{{ $exp->paragraf_exp }}</div>
                        <div class="btn-list">
                          
                          <button class="btn position-relative"><small>{{ $exp->first_years_exp }}  ~  {{ $exp->last_years_exp }}</small><span class="badge bg-indigo badge-notification badge-blink"></span></button>
                          
                        </div>

                        <div class="text-secondary mt-3 mb-6"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-badge-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 7h-6l4 5l-4 5h6l4 -5z" /></svg>{{ $exp->desc_exp }}</div>
                      </li>
                    @endforeach
                    
                      
                      <li class="step-item disabled">
                        <div class="h4 m-0">-</div>
                        <div class="text-secondary">Tidak Ada | None | なし</div>
                      </li>
                    </ul>
                  </div>
                
                  
                </div>
              </div>
            

            </div>
          </div>
        </div>
        



        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <!-- <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                 
                  <li class="list-inline-item"><a href="https://drive.google.com/drive/folders/1rVGckCHDWOTHIlVE68hC7PaYpU6rjzmF?usp=sharing" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/fianfi/" target="_blank" class="link-secondary" rel="noopener">
                      
                      LikendIn
                    </a>
                  </li>
                </ul>
              </div> -->
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2024
                    <a href="" class="link-secondary">Andika Alifian</a>.
                    All rights reserved.
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>


    





@endsection