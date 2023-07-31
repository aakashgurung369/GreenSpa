@include('User.layout.head')

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">

  @include('User.layout.header')
    <div class="header-bottom" data-header>
      <div class="container">

        <a href="/" class="logo"> <i>Green spa</i> </a>

        @include('User.layout.nav')

        

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #GALLERY
      -->

      <section class="section gallery" id="gallery" aria-label="photo gallery" style="margin-top: 6rem;">
        <div class="container">

          <div class="title-wrapper">

            <div>
              <h2 class="h2 section-title">Latest Photo Gallery</h2>

            </div>

          </div>

          <ul class="grid-list">
          @php
            $gallerys=App\Models\Gallery::latest()->get();
          @endphp
          @foreach($gallerys as $gallery)
            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="{{asset('/Gallery/'.$gallery->image)}}" width="422" height="550" loading="lazy" alt=" "
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title"> </h3>

                  <p class="card-text">{!! $gallery->name !!}</p>

                  <a href="{{asset('/Gallery/'.$gallery->image)}}" class="card-btn" aria-label="Read more">
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>
          @endforeach


          </ul>

        </div>
      </section>



    </article>
  </main>

 <!-- 
    - #FOOTER
  -->
  @include('User.layout.footer')
  




  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true" style="color: #f0f0f0;" ></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="{{asset('GreenSpa/assets/js/script.js')}}" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- 
    ANIMATIONS
   -->
   <script src="https://unpkg.com/scrollreveal"></script>

</body>

</html>