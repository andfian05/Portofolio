@extends('front-end.component.index')
@section('content')


    <script src="{{asset('templeate_2/dist/js/demo-theme.min.js?1692870487') }}"></script>
    <div class="page">
      

    

      <div class="page-wrapper">
       
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
               
                <div class="page-pretitle">
                  Overview
                </div>
                <h2 class="page-title">
                  Dashboard
                </h2>
              </div>

              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                  <!-- <span class="d-none d-sm-inline">
                    <a href="{{ route('admin.resume.unduh') }}" class="btn">
                      Unduh Resume
                    </a>
                  </span> -->
                  
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark " title="Enable dark mode" data-bs-toggle="tooltip"
		              data-bs-placement="bottom">
                
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                  </svg>

                  </a>

                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
		              data-bs-placement="bottom">
                
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                  </svg>

                  </a>


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
                <!-- <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-3">
                      
                      <img src="{{asset('templeate/src/assets/images/logos/T.png')}}" class="mt-4" width="180" height="180" alt="" />
                    </div>
                    <div class="card-title mb-1">Thatcher Keel</div>
                    <div class="text-secondary">VP Sales</div>
                  </div>
                  <a href="https://www.linkedin.com/in/fianfi/" class="card-btn">Melihat Profil</a>
                </div> -->
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
                        <div class="markdown text-secondary">
                        {{$summary->desc_title}}
                        </div><br>

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
                                          <p class="mb-5">{{$summary->japanese}}</p>
                                          
                                      </div>
                                      
                          
                                      </div>
                                      `;
                                  } else if (pesan == "korea") {
                                  p_kontainer.innerHTML = `
                                      <div class="form-group">
                                      
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                      
                                          <p class="mb-5"> {{$summary->korean}}  </p>
                                          
                                      </div>
                                      
                          
                                      </div>
                                      `;
                                  } else if (pesan == "arab") {
                                  p_kontainer.innerHTML = `
                                      <div class="form-group">
                                      
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                      
                                          <p class="mb-5"> {{$summary->arabic}} </p>
                                          
                                      </div>
                                      
                          
                                      </div>
                                      `;
                                  } else if (pesan == "rusia") {
                                  p_kontainer.innerHTML = `
                                      <div class="form-group">
                                      
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                      
                                          <p class="mb-5"> {{$summary->russian}} </p>
                                          
                                      </div>
                                      
                          
                                      </div>
                                      `;
                                  } else if (pesan == "jawa") {
                                  p_kontainer.innerHTML = `
                                      <div class="form-group">
                                      
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                      
                                          <p class="mb-5"> {{$summary->java}} </p>
                                          
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

                           

                        <!-- <div class="mt-3">
                          <a href="{{ route('admin.resume.unduh') }}" class="btn btn-primary">Unduh Resume</a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-lg-12">
                <div class="card card-md">
                <div class="accordion" id="accordion-example">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-1">
                          <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true">
                            Accordion Item #1
                          </button>
                        </h2>
                        <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                          <div class="accordion-body pt-0">
                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                          </div>
                        </div>
                      </div>
                     
                    </div>
                </div>
              </div>

             


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Cart title</h3>
                    <div class="card-actions">
                      
                      <a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-simple">
                       Deskripsi Portofolio
                      </a>
                      <a href="#" class="btn btn-outline-secondary">
                       Melihat Portofolio
                      </a>
                      
                      
                     
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                      <line x1="0" y1="0" x2="400" y2="200"></line>
                      <line x1="0" y1="200" x2="400" y2="0"></line>
                    </svg>
                  </div>
                </div>
              </div>

              <div class="modal modal-blur fade" id="modal-simple" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

              

              


              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Social colors</h3>
                  </div>
                  <div class="card-body">
                    <div class="row g-2 align-items-center">
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-facebook w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                          Facebook
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-twitter w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                          Twitter
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-google w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-google -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" /></svg>
                          Google
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-youtube w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" /><path d="M10 9l5 3l-5 3z" /></svg>
                          Youtube
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-vimeo w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-vimeo -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 8.5l1 1s1.5 -1.102 2 -.5c.509 .609 1.863 7.65 2.5 9c.556 1.184 1.978 2.89 4 1.5c2 -1.5 7.5 -5.5 8.5 -11.5c.444 -2.661 -1 -4 -2.5 -4c-2 0 -4.047 1.202 -4.5 4c2.05 -1.254 2.551 1 1.5 3c-1.052 2 -2 3 -2.5 3c-.49 0 -.924 -1.165 -1.5 -3.5c-.59 -2.42 -.5 -6.5 -3 -6.5s-5.5 4.5 -5.5 4.5z" /></svg>
                          Vimeo
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-dribbble w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-dribbble -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 3.6c5 6 7 10.5 7.5 16.2" /><path d="M6.4 19c3.5 -3.5 6 -6.5 14.5 -6.4" /><path d="M3.1 10.75c5 0 9.814 -.38 15.314 -5" /></svg>
                          Dribbble
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-github w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                          Github
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-instagram w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-instagram -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg>
                          Instagram
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-pinterest w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-pinterest -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 20l4 -9" /><path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7" /><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /></svg>
                          Pinterest
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-vk w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 19h-4a8 8 0 0 1 -8 -8v-5h4v5a4 4 0 0 0 4 4h0v-9h4v4.5l.03 0a4.531 4.531 0 0 0 3.97 -4.496h4l-.342 1.711a6.858 6.858 0 0 1 -3.658 4.789h0a5.34 5.34 0 0 1 3.566 4.111l.434 2.389h0h-4a4.531 4.531 0 0 0 -3.97 -4.496v4.5z" /></svg>
                          VK
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-rss w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/rss -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M4 4a16 16 0 0 1 16 16" /><path d="M4 11a9 9 0 0 1 9 9" /></svg>
                          RSS
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-flickr w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-flickr -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M17 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                          Flickr
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-bitbucket w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-bitbucket -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.648 4a.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a.644 .644 0 0 0 .642 -.539l3.35 -14.71a.641 .641 0 0 0 -.64 -.744l-16.704 -.007z" /><path d="M14 15h-4l-1 -6h6z" /></svg>
                          Bitbucket
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                        <a href="#" class="btn btn-tabler w-100">
                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-tabler -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9l3 3l-3 3" /><path d="M13 15l3 0" /><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /></svg>
                          Tabler
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
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
                  <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                  <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                  <li class="list-inline-item">
                    <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sponsor
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2023
                    <a href="." class="link-secondary">Tabler</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="./changelog.html" class="link-secondary" rel="noopener">
                      v1.0.0-beta20
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>


    </div>



    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
            </div>
            <label class="form-label">Report type</label>
            <div class="form-selectgroup-boxes row mb-3">
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Simple</span>
                      <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                    </span>
                  </span>
                </label>
              </div>
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Advanced</span>
                      <span class="d-block text-secondary">Insert charts and additional advanced analyses to be inserted in the report</span>
                    </span>
                  </span>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="mb-3">
                  <label class="form-label">Report url</label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                      https://tabler.io/reports/
                    </span>
                    <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Visibility</label>
                  <select class="form-select">
                    <option value="1" selected>Private</option>
                    <option value="2">Public</option>
                    <option value="3">Hidden</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Client name</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Reporting period</label>
                  <input type="date" class="form-control">
                </div>
              </div>
              <div class="col-lg-12">
                <div>
                  <label class="form-label">Additional information</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </a>
            <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              Create new report
            </a>
          </div>
        </div>
      </div>
    </div>


    @endsection
   