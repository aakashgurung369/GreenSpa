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
                <form action="{{route('gallery.add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($gallerys as $gallery)
                <tr>
                  <td scope="row">{!! $gallery->id !!}</td>
                  <td>{!! $gallery->name !!}</td>
                  <td>

                    <img src="{{asset('/Gallery/'.$gallery->image)}}" style="width:150px; height:100%;">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{!! $gallery->id !!}">
                    <i class="bi bi-pencil-square"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-{!! $gallery->id !!}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="{{route('update.imagegallery',$gallery->id)}}" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                <img src="{{asset('/Gallery/'.$gallery->image)}}" style="width:200px; height:100%;"><br/><br/>
                                <input type="file" class="form-control" name="image"  id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                  </td>
                  <td>
                    <a href="{{ route('admin.editgallery',$gallery->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('admin.deletegallery',$gallery->id) }}" onclick="return confirmation(event)" class="btn btn-danger">Delete</a>
                  </td>
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
    