    <script src="{{asset('Admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('Admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('Admin/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('Admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('Admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('Admin/assets/js/misc.js')}}"></script>
    <script src="{{asset('Admin/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('Admin/assets/js/todolist.js')}}"></script>
            <script>
              function confirmation(ev){
                  ev.preventDefault();
                  var urlToRedirect = ev.currentTarget.getAttribute('href');
                  console.log(urlToRedirect);
                  swal({
                      title: "Are you sure to delete this?",
                      text: "You will not able to revert this!",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                  })
                  .then((willCancel) => {
                      if(willCancel){
                          window.location.href = urlToRedirect;
                      }
                  });
              }
          </script>
  </body>
</html>