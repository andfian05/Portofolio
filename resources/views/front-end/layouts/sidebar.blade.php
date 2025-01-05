    
    
    
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
    
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="" class="text-nowrap logo-img">
            <img src="{{asset('templeate/src/assets/images/logos/T.png')}}" class="mt-4" width="220" height="220" alt="" />
            
            
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer justify-content-between" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Components Page</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ url('/') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Summary</span>
              </a>
            </li>
           
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('front-end.detail-page.education') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Education</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Work Experience</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('front-end.detail-page.project') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">My Project</span>
              </a>
            </li>
           


           
          </ul>


          
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->