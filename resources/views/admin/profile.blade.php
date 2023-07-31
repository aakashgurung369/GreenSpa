@include('admin.layout.headcss')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('admin.layout.nav')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layout.sidenav')
       
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Edit Profile
              </h3>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Admin Profile</th>
                  <th scope="col">Youtube Site</th>
                  <th scope="col">Facebook Site</th>
                  <th scope="col">Instagram Site</th>
                  <th scope="col">Twitter Site</th>
                </tr>
              </thead>
              <tbody>
                @foreach($profiles as $profile)
                <tr>
                  <td scope="row">
                    <img src="{{asset('/Profile/'.$profile->image)}}" style="width:150px; height:100%;">
                  </td>
                  <td>{!! $profile->youtube !!}</td>
                  <td>{!! $profile->facebook !!}</td>
                  <td>{!! $profile->insta !!}</td>
                  <td>{!! $profile->twitter !!}</td>
                  <td><a href="{{ route('admin.editprofile',$profile->id) }}" class="btn btn-success">Edit</a></td>
              
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          @include('admin.layout.footer')
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.layout.adminjs')
    