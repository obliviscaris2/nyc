{{-- 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ url('admin') }}" class="nav-link <?= $page_title == 'Dashboard' ? 'active':'';?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
           
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/about') }}" class="nav-link <?= $page_title == 'About' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About Page
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="{{ url('admin/categories') }}" class="nav-link <?= $page_title == 'Categories' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories
              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/posts') }}" class="nav-link <?= $page_title == 'Posts' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Posts
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/documents/index') }}" class="nav-link <?= $page_title == 'Documents' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Documents
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/information/index') }}" class="nav-link <?= $page_title == 'Documents' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Information
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/other/index') }}" class="nav-link <?= $page_title == 'Documents' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Others

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/team') }}" class="nav-link <?= $page_title == 'Team' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Team

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/sitesetting') }}" class="nav-link <?= $page_title == 'Site Setting' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                SiteSettings

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/video') }}" class="nav-link <?= $page_title == 'Video' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Video

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/image') }}" class="nav-link <?= $page_title == 'Image' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Image

              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('admin/users') }}" class="nav-link <?= $page_title == 'Users' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/link') }}" class="nav-link <?= $page_title == 'Important Links' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Important Links
              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/contactus/index') }}" class="nav-link <?= $page_title == 'Contact Us' ? 'active':'';?> ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Contact Us
              
              </p>
            </a>
          </li>
        
         
       
        </ul>
      </nav>

    </div>

  </aside> --}}


  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href={{ route('admin.index') }}><img src= {{ asset('css/admincss/adminasset/images/faces/dummy-img.jpg') }} alt="logo" /></a>
      {{-- "assets/images/logo.svg" --}}
      <a class="sidebar-brand brand-logo-mini" href={{ route('admin.index') }}><img src= {{ asset('css/admincss/adminasset/images/faces/dummy-img.jpg') }} alt="logo"/></a>
    </div>

    <!-- 

      ADMIN PROFILE STUFF

    
    -->
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src={{ asset('css/admincss/adminasset/images/faces/dummy-img.jpg') }} alt="">
              {{-- "assets/images/faces/face15.jpg" --}}
              <span class="count bg-success"></span>
            </div>

            @if( auth()->check() )

              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal text-white">{{ auth()->user()->name }}</h5>
                <span>Member</span>

              </div>
            @endif

      <!-- 
        
        ADMIN DASHBOARD SIDEPANEL BELOW HERE


      -->
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href={{ route('admin.index') }}>
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('Sitesetting.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Sitesettings</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.image.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Images</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('About.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Abouts</span>
        </a>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.team.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">Team</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.documents.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Documents</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.information.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Information</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.other.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Other</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Categories</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.posts.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Posts</span>
        </a>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.contactus.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Contacts</span>
        </a>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.video.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Videos</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.committeedetails.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Committee Details</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.link.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Links</span>
        </a>
      </li>
    </ul>
</nav> 