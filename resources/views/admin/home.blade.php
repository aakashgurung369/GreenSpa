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
                </span> Edit Home
              </h3>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Heading</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($homes as $home)
                <tr>
                  <td scope="row">
                    <img src="{{asset('/Home/'.$home->image)}}" style="width:150px; height:100%;">
                  </td>
                  <td>{!! $home->heading !!}</td>
                  <td>{!! $home->description !!}</td>
                  <td><a href="{{ route('admin.edithome',$home->id)}}" class="btn btn-success">Edit</a></td>
              
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
    