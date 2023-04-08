<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('image/logo/text-in-crescent-9350ld.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
        Admin
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ areActiveRoutes(['dashboard'])}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('service_list') }}" class="nav-link {{ areActiveRoutes(['service_list'])}}">
                <i class="nav-icon fas fa-cogs"></i>
              <p>
                Service
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('populer_service_list') }}" class="nav-link {{ areActiveRoutes(['populer_service_list'])}}">
                <i class="nav-icon fas fa-star"></i>
              <p>
                Populer Service
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('message_list') }}" class="nav-link {{ areActiveRoutes(['message_list'])}}">
                <i class="nav-icon fas fa-comment"></i>
              <p>
                Messages
                <span class="right badge badge-danger">{{App\Models\Message::where('seen',0)->count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('slider_list') }}" class="nav-link {{ areActiveRoutes(['slider_list'])}}">
                <i class="nav-icon fas fa-code"></i>
              <p>
                Slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('feedback_list') }}" class="nav-link {{ areActiveRoutes(['feedback_list'])}}">
                <i class="nav-icon far fa-comment-dots"></i>
              <p>
                Feed Back
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('profile') }}" class="nav-link {{ areActiveRoutes(['profile'])}}">
                <i class="nav-icon fas fa-user-circle"></i>
              <p>
                profile
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
