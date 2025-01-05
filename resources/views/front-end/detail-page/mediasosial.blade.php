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

                   
             
            <div class="col-12">
                <div class="card">
                  <!-- <div class="card-header">
                    <h3 class="card-title">Social colors</h3>
                  </div> -->
                  <div class="card-body">
                    <div class="row g-2 align-items-center">
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="https://web.facebook.com/andika.alifian.7/?locale=id_ID" class="btn btn-outline-info w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                          Facebook
                        </a>
                      </div>
                     
                      
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="https://youtube.com/@selfreaper?si=XbViIZ67NlORtUgI" class="btn btn-outline-danger w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" /><path d="M10 9l5 3l-5 3z" /></svg>
                          Youtube
                        </a>
                      </div>
                      
                      
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="https://github.com/andfian05" class="btn btn-outline-secondary w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                          Github
                        </a>
                      </div>

                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="https://www.instagram.com/fianfi__/" class="btn btn-outline-primary w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-instagram -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg>
                          Instagram
                        </a>
                      </div>

                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="https://www.linkedin.com/in/fianfi/" class="btn btn-outline-info w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 11v5" />
                            <path d="M8 8v.01" />
                            <path d="M12 16v-5" />
                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                          </svg>
                          LikendIn
                        </a>
                      </div>
                      
                      
                      
                     
                     
                      
                    </div>
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