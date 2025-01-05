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

                    
             
            @foreach ($edu as $edu)
              <div class="col-md-4">
                
                <div class="card ">
                    <div class="ribbon ribbon-top ribbon-bookmark bg-green">
                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                    </div>
                  <div class="card-header">
                    <!-- <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                      <li class="nav-item">
                        <a href="#tabs-home" class="nav-link active" data-bs-toggle="tab">
                          
                          Gambar</a>
                      </li>
                      <li class="nav-item">
                        <a href="#tabs-profile" class="nav-link" data-bs-toggle="tab">
                          
                          Profil Pendidikan</a>
                      </li>
                    </ul> -->
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                    
                     
                      <!-- <div class="tab-pane"> -->
                        <h4>{{ $edu->paragraf_edu }}</h4>
                        <div class="markdown text-secondary mb-3">{{ $edu->desc_edu }}</div>
                        <!-- <div><img src="{{ $edu->image_edu }}" class="card-img-top" alt="..."></div> -->
                      <!-- </div> -->

                       <!-- <div class="mt-3">
                          <a href="" class="btn btn-secondary">Selengkapnya</a>
                        </div> -->
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

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