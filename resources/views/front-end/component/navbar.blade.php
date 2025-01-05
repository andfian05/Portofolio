

         <!-- Navbar -->
        <header class="navbar navbar-expand-md d-print-none" >
            <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <!-- <a href="">
                <img src="{{asset('templeate_2/static/logo.svg')}}" width="110" height="32" alt="Andika" class="navbar-brand-image">
                </a> -->
            </h1>
            
            </div>
        </header>
        
        
        
        <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
              <ul class="navbar-nav">
              

                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('pageone') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-check">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                      <path d="M15 19l2 2l4 -4" />
                    </svg>
                    </span>
                    <span class="nav-link-title">
                    
                      Summary
                    </span>
                  </a>
                </li>
               
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('front-end.detail-page.pendidikan') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-school">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                      <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                    </svg>
                    </span>
                    <span class="nav-link-title">
                      Education
                    </span>
                  </a>
                </li>


                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('front-end.detail-page.pengalaman') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-stairs-up">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M22 6h-5v5h-5v5h-5v5h-5" />
                      <path d="M6 10v-7" />
                      <path d="M3 6l3 -3l3 3" />
                    </svg>
                    </span>
                    <span class="nav-link-title">
                      Work Experience
                    </span>
                  </a>
                </li>
               
                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('front-end.detail-page.proyek') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-swipe">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M15 16.572v2.42a2.01 2.01 0 0 1 -2.009 2.008h-7.981a2.01 2.01 0 0 1 -2.01 -2.009v-7.981a2.01 2.01 0 0 1 2.009 -2.01h2.954" />
                      <path d="M9.167 4.511a2.04 2.04 0 0 1 2.496 -1.441l7.826 2.097a2.04 2.04 0 0 1 1.441 2.496l-2.097 7.826a2.04 2.04 0 0 1 -2.496 1.441l-7.827 -2.097a2.04 2.04 0 0 1 -1.441 -2.496l2.098 -7.827z" />
                    </svg>
                    </span>
                    <span class="nav-link-title">
                      Project
                    </span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="/medsos" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-puzzle-2">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                      <path d="M12 4v2.5a.5 .5 0 0 1 -.5 .5a1.5 1.5 0 0 0 0 3a.5 .5 0 0 1 .5 .5v1.5" />
                      <path d="M12 12v1.5a.5 .5 0 0 0 .5 .5a1.5 1.5 0 0 1 0 3a.5 .5 0 0 0 -.5 .5v2.5" />
                      <path d="M20 12h-2.5a.5 .5 0 0 1 -.5 -.5a1.5 1.5 0 0 0 -3 0a.5 .5 0 0 1 -.5 .5h-1.5" />
                      <path d="M12 12h-1.5a.5 .5 0 0 0 -.5 .5a1.5 1.5 0 0 1 -3 0a.5 .5 0 0 0 -.5 -.5h-2.5" />
                    </svg>

                    </span>
                    <span class="nav-link-title">
                      Media Social
                    </span>
                  </a>
                </li>

                

                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      
                    </span>
                    <span class="nav-link-title">
                      Resource
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="">
                          Github
                        </a>
                        <a class="dropdown-item" href="">
                          LikendIn
                        </a>
                       
                    </div>
                  </div>
                </li> -->
                
              </ul>
              
            </div>
          </div>
        </div>
      </header>