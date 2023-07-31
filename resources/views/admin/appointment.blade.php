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
                </span> Appointment List
              </h3>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Appointment Number</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Appointment Date</th>
                  <th scope="col">Service</th>
                  <th scope="col">Message</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($appointment as $app)
                <tr>
                  <td scope="row">{!! $app->id !!}</td>
                  <td>{!! $app->name !!}</td>
                  <td>{!! $app->email !!}</td>
                  <td>{!! $app->date !!}</td>
                  <td>{!! $app->service !!}</td>
                  <td>{!! $app->message !!}</td>
                  <td><a href="{{ route('admin.replyemail',$app->id) }}" class="btn btn-success">Reply</a></td>
                  <td><a href="{{ route('admin.deleteapp',$app->id) }}" onclick="return confirmation(event)" class="btn btn-danger">Delete</a></td>
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
    