<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    @php
                      $profile=App\Models\Profile::orderby('id', 'asc')->limit(1)->first();
                    @endphp
                  <img src="{{asset('/Profile/'.$profile->image)}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Admin</span>
                  <span class="text-secondary text-small">Administrator</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.adminindex') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.home')}}">
                <span class="menu-title">Edit Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
                     </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.profile') }}">
                <span class="menu-title">Edit Profile</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.appointment') }}">
                <span class="menu-title">All Appointment</span>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.service') }}">
                <span class="menu-title">Manage Service</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#service-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Pricing</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
              <div class="collapse" id="service-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.pricing') }}"> Add Pricing </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.pricings') }}"> Manage Pricing </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('admin.gallery') }}">
                <span class="menu-title">Manage Gallery</span>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('admin.contact') }}">
                <span class="menu-title">Manage Contact</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        @include('sweetalert::alert')