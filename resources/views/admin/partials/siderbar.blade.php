<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
      <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
        <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
          <div class="d-table m-auto">
            <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{ asset('shards/images/shards-dashboards-logo.svg') }}" alt="Shards Dashboard">
            <span class="d-none d-md-inline ml-1">Shards Dashboard</span>
          </div>
        </a>
        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
          <i class="material-icons">&#xE5C4;</i>
        </a>
      </nav>
    </div>
    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
      <div class="input-group input-group-seamless ml-3">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-search"></i>
          </div>
        </div>
        <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
    </form>
    <div class="nav-wrapper">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
            <i class="material-icons">edit</i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('slider*') ? 'active' : '' }}" href="{{ route('slider') }}">
            <i class="material-icons">vertical_split</i>
            <span>Danh sách slideshow</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('aboutus*') ? 'active' : '' }}" href="{{ route('aboutus') }}">
            <i class="material-icons">vertical_split</i>
            <span>Danh sách about</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('services*') ? 'active' : '' }}" href="{{ route('services') }}">
            <i class="material-icons">vertical_split</i>
            <span>Danh sách dịch vụ chúng tôi</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('teamwork*') ? 'active' : '' }}" href="{{ route('teamwork') }}">
            <i class="material-icons">vertical_split</i>
            <span>Danh sách gặp đội chúng tôi</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('portfolio*') ? 'active' : '' }}" href="{{ route('portfolio') }}">
            <i class="material-icons">vertical_split</i>
            <span>Danh sách danh mục đầu tư</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('news*') ? 'active' : '' }}" href="{{ route('news') }}">
            <i class="material-icons">vertical_split</i>
            <span>Danh sách tin tức</span>
          </a>
        </li>


         <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('testimonials*') ? 'active' : '' }}" href="{{ route('testimonials') }}">
            <i class="material-icons">vertical_split</i>
            <span>Danh sách đánh giá khách hàng</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('clients*') ? 'active' : '' }}" href="{{ route('clients') }}">
            <i class="material-icons">vertical_split</i>
            <span>Danh sách khách hàng</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('contacts*') ? 'active' : '' }}" href="{{ route('contacts') }}">
            <i class="material-icons">vertical_split</i>
            <span>Danh sách phản hồi</span>
          </a>
        </li>


      </ul>
    </div>
  </aside>