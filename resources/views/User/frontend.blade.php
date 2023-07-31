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
        - #HERO
      -->

      
      @include('User.layout.section')
    



      <!-- 
        - #SERVICE
      -->
      @include('User.layout.service')
     


      <!-- 
        - #PRICING
      -->
      @include('User.layout.pricing')
      


      <!-- 
        - #GALLERY
      -->
      @include('User.layout.gallery')


      <!-- 
        - #APPOINTMENT
      -->
      @include('User.layout.appointment')
      
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