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
                </span> Edit Contact
              </h3>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Address</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Starting Time</th>
                  <th scope="col">Ending Time</th>
                  <th scope="col">Starting Day</th>
                  <th scope="col">Ending Day</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contacts as $contact)
                <tr>
                  <td scope="row">{!! $contact->Address !!}</td>
                  <td>{!! $contact->Phone !!}</td>
                  <td>{!! $contact->email !!}</td>
                  <td>{!! $contact->StartingTime !!}</td>
                  <td>{!! $contact->EndingTime !!}</td>
                  <td>{!! $contact->StartingDay !!}</td>
                  <td>{!! $contact->EndingDay !!}</td>
                  <td><a href="{{ route('admin.editcontact',$contact->id) }}" class="btn btn-success">Edit</a></td>
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
    