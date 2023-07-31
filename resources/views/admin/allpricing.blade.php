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
                </span> Manage Pricing
              </h3>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Service</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pricings as $service)
                <tr>
                  <td scope="row">
                    <img src="{{asset('/Pricing/'.$service->image)}}" style="width:150px; height:100%;">
                  </td>
                  <td>{!! $service->name !!}</td>
                  <td>{!! $service->description !!}</td>
                  <td>{!! $service->service !!}</td>
                  <td>{!! $service->price !!}</td>
                  <td><a href="{{ route('admin.editpricing',$service->id) }}" class="btn btn-success">Edit</a></td>
                  <td><a href="{{ route('admin.deletepricing',$service->id) }}" onclick="return confirmation(event)" class="btn btn-danger">Delete</a></td>
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
    