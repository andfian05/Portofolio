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
                   
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mood-smile-beam">
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
            <div class="row row-deck row-cards">
            <div class="col-md-6 col-xl-12">
                
            </div>
             
              <div class="col-sm-9 col-lg-12">
                <div class="card card-md">
                  <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon bg-primary">
                     
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" /><path d="M10 10l.01 0" /><path d="M14 10l.01 0" /><path d="M10 14a3.5 3.5 0 0 0 4 0" /></svg>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-12">
                        <span><i>{{$summary->span_title}}</i></span>
                        <h3 class="h1">{{$summary->heading_title}}</h3>
                        <div class="markdown text-secondary mb-3">
                        {{$summary->desc_title}}
                        </div>



                        <form id="form1" name="form1">
                            
                              <div class="mb-3">
                                  <label for="" class="form-label">Traslate Bahasa?</label>
                                  <select class="form-control" name="kategori" id="kategori" value="" onclick="tampilkan()">
                                      <option value="">--- Pilih ---</option>
                                      <option value="jawa">Java</option>
                                      <option value="jepang">Japanese</option>
                                      <option value="korea">Korean</option>
                                      <option value="arab">Arabic</option>
                                      <option value="rusia">Russian</option>

                          
                                  </select>
                              </div>

                              <script>
                              function tampilkan() {
                                  var pesan = document.getElementById("form1").kategori.value;
                                  var p_kontainer = document.getElementById("container");
                              
                                  if (pesan == "jepang") {
                                  p_kontainer.innerHTML = `
                                      <div class="form-group">
                                      
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                          <p class="mb-5 markdown text-secondary">{{$summary->japanese}}</p>
                                          
                                      </div>
                                      
                          
                                      </div>
                                      `;
                                  } else if (pesan == "korea") {
                                  p_kontainer.innerHTML = `
                                      <div class="form-group">
                                      
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                      
                                          <p class="mb-5 markdown text-secondary"> {{$summary->korean}}  </p>
                                          
                                      </div>
                                      
                          
                                      </div>
                                      `;
                                  } else if (pesan == "arab") {
                                  p_kontainer.innerHTML = `
                                      <div class="form-group">
                                      
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                      
                                          <p class="mb-5 markdown text-secondary"> {{$summary->arabic}} </p>
                                          
                                      </div>
                                      
                          
                                      </div>
                                      `;
                                  } else if (pesan == "rusia") {
                                  p_kontainer.innerHTML = `
                                      <div class="form-group">
                                      
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                      
                                          <p class="mb-5 markdown text-secondary"> {{$summary->russian}} </p>
                                          
                                      </div>
                                      
                          
                                      </div>
                                      `;
                                  } else if (pesan == "jawa") {
                                  p_kontainer.innerHTML = `
                                      <div class="form-group">
                                      
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                      
                                          <p class="mb-5 markdown text-secondary"> {{$summary->java}} </p>
                                          
                                      </div>
                                      
                          
                                      </div>
                                      `;
                                  } 
                              }
                              </script>

                              <div class="container">
                                  <p id="container"></p>
                              </div>

                      
                            </form>

                            

                      </div>
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