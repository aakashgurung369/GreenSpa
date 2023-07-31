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
                </span> Add Pricing
              </h3>
            </div>
            <div class="content">
                <form action="{{route('pricing.add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleInputPassword1" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    @php
                      $services=App\Models\Service::all();
                    @endphp
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Service</label>
                        <select id="StartingTime" class="form-control" name="service" required>
                          <option value="" selected>Select Service</option>
                          @foreach($services as $service)
                            <option value="{!! $service->name !!}">{!! $service->name !!}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
            </div>
          </div>
          @include('admin.layout.footer')
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.layout.adminjs')
    