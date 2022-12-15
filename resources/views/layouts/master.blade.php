<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('favicon.png') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('includes.headers')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                {{-- <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
                <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        {{-- <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image"> --}}
                    </div>
                    <div class="info">
                        <a href="/profile" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link active">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @can('hasPermission', 'view_services')
                            <li class="nav-item">
                                <a href="{{ route('admin.services.index') }}" class="nav-link active">
                                    <i class="fab fa-servicestack"></i>
                                    <p>
                                        About Us
                                    </p>
                                </a>
                            </li>
                        @endcan

                        @can('hasPermission', 'view_devs')
                            <li class="nav-item">
                                <a href="{{ route('admin.devs.index') }}" class="nav-link active">
                                    <i class="fab fa-servicestack"></i>
                                    <p>
                                        Development
                                    </p>
                                </a>
                            </li>
                        @endcan

                        @can('hasPermission', 'view_images')
                            <li class="nav-item">
                                <a href="{{ route('admin.images.index') }}" class="nav-link active">
                                    <i class="fas fa-images"></i>
                                    <p>
                                        Gallery
                                    </p>
                                </a>
                            </li>
                        @endcan

                        @can('hasPermission', 'view_videos')
                            <li class="nav-item">
                                <a href="{{ route('admin.videos.index') }}" class="nav-link active">
                                    <i class="fas fa-videos"></i>
                                    <p>
                                        Videos
                                    </p>
                                </a>
                            </li>
                        @endcan

                        @can('hasPermission', 'view_posts')
                            <li class="nav-item">
                                <a href="{{ route('admin.posts.index') }}" class="nav-link active">
                                    <i class="fas fa-newspaper"></i>
                                    <p>
                                        News/Publications
                                    </p>
                                </a>
                            </li>
                        @endcan



                        @can('hasPermission', 'view_downloads')
                            <li class="nav-item">
                                <a href="{{ route('admin.downloads.index') }}" class="nav-link active">
                                    <i class="fas fa-images"></i>
                                    <p>
                                        Downloads
                                    </p>
                                </a>
                            </li>
                        @endcan





                        @can('hasPermission', 'view_staffs')
                            <li class="nav-item">
                                <a href="{{ route('admin.staffs.index') }}" class="nav-link active">
                                    <i class="fas fa-user-friends"></i>
                                    <p>
                                        Staffs
                                    </p>
                                </a>
                            </li>
                        @endcan


                        {{-- <li class="nav-item">
                            <a href="{{ route('admin..index') }}" class="nav-link active">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>
                                    model
                                </p>
                            </a>
                        </li> --}}
                        @if (Auth::user()->isAdmin() || Auth::user()->isSuperAdmin())
                            <li class="nav-item menu-open">
                                <a href="/home" class="nav-link active">
                                    <i class="fas fa-cogs"></i>
                                    <p>
                                        Management
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @can('hasPermission', 'view_users')
                                        <li class="nav-item">
                                            <a href="{{ route('admin.users.index') }}" class="nav-link active">
                                                <i class="fas fa-users"></i>
                                                <p>Users</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('hasPermission', 'view_roles')
                                        <li class="nav-item">
                                            <a href="{{ route('admin.roles.index') }}" class="nav-link active">
                                                <i class="fas fa-user-tag"></i>
                                                <p>Roles</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('hasPermission', 'view_permissions')
                                        <li class="nav-item">
                                            <a href="{{ route('admin.permissions.index') }}" class="nav-link active">
                                                <i class="fas fa-user-shield"></i>
                                                <p>Permissions</p>
                                            </a>
                                        </li>
                                    @endcan
                                    <li class="nav-item">
                                        <a href="{{ route('admin.sitesettings.index') }}" class="nav-link active">
                                            <i class="fas fa-cogs"></i>
                                            <p>Site Setting</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @can('hasPermission', 'view_history')
                            <li class="nav-item menu-open">
                                <a href="/home" class="nav-link active">
                                    <i class="fas fa-history"></i>
                                    <p>
                                        History
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.application-history') }}" class="nav-link active">
                                            <p>Application History</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.system-history') }}" class="nav-link active">

                                            <p>System History</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan


                        <li class="nav-item menu-open">
                            <a href="/home" class="nav-link active">
                                <i class="far fa-user-circle"></i>
                                <p>
                                    {{ Auth::user()->name }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('profile.index') }}" class="nav-link active">
                                        <i class="fas fa-user-circle"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                @yield('content')
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        @include('includes.footer')
    </div>
    <!-- ./wrapper -->

    @include('includes.scripts')
    @include('includes.toasts')
</body>

</html>
