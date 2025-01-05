
        <aside class="left-sidebar"> 
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="" class="text-nowrap logo-img">
          <img src="{{asset('templeate/src/assets/images/logos/T.png')}}" class="mt-4 justify-content" width="170" height="170" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Point One</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ url('/home_admin') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Data Diri</span>
              </a>
            </li> -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Point Two</span>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.summary.index') }}" aria-expanded="false">
               <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Summary</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.education.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Education</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.experience.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Work Experience</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.project.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">My Project</span>
              </a>
            </li><br><br>
            
            
          </ul>
          
        </nav>
      </div>
    </aside>
    