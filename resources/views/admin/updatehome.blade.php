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
            <form method='POST' action="{{ route('admin.homeedit',$homes->id)}}" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Heading</label>
                <input type="text" name="heading" class="form-control" value="{!! $homes-> heading !!}" id="exampleInputEmail1" aria-describedby="emailHelp" required>
               
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" value="{!! $homes->description !!}" id="exampleInputPassword1" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <img src="{{asset('/Home/'.$homes->image)}}" style="width:200px; height:100%;">
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">
              </div>
              
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
          @include('admin.layout.footer')
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.layout.adminjs')
    