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
                </span> Manage Service
              </h3>
            </div>
            <div class="content">
                <form action="{{route('service.add')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Service</label>
                        <input type="text" class="form-control" name="name"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleInputPassword1" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Service</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($services as $service)
                <tr>
                  <td scope="row">{!! $service->id !!}</td>
                  <td>{!! $service->name !!}</td>
                  <td>{!! $service->description !!}</td>
                  <td><a href="{{ route('admin.deleteservice',$service->id) }}" onclick="return confirmation(event)" class="btn btn-danger">Delete</a></td>
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
    