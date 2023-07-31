@php
 $home=App\Models\Home::orderby('id', 'asc')->limit(1)->first();
@endphp
{{-- <style>
  section .hero{
    position: relative;
  }
  section .sec-container {
        position: absolute;
    top: 280px;
    left: 15%;

    color: lightslategrey;
    background-color: aq;
  }
  
 </style> --}}

 {{-- <style>
  section .hero{
    position: relative;
  }

  section .sec-container {
    position: absolute;
    left: 10%;
    z-index: 9;
  } --}}

  
 </style>
<section class=" hero has-before has-bg-image" id="home" aria-label="home">
        <ul>
            <li data-transition="scaledownfromtop" data-masterspeed="700"> 
                <img src="{{asset('/Home/'.$home->image)}}" alt="Image" style="margin-top: -12rem; width:100%; height: 100%; z-index: -1;">
              </div>
              <div class="tp-caption lfb ltt tp-resizeme start" 
                      data-x="left" 
                      data-hoffset="0" 
                      data-y="center" 
                      data-voffset="0" 
                      data-speed="600" 
                      data-start="400" 
                      data-easing="Power4.easeOut" 
                      data-splitin="none" 
                      data-splitout="none" 
                      data-elementdelay="0.1" 
                      data-endelementdelay="0.1" 
                      data-endspeed="500" 
                      data-endeasing="Power4.easeIn">
                      <div class="text-container">
                        <div class="sec-container">

                            <h1 class="h1 hero-title">{!! $home->heading !!} </h1>

                            <p class="hero-text">
                            {!! $home->description !!}
                            </p>

                            <a href="/#services" class="btn has-before">
                              <span class="span">Explore Our Services</span>

                              <ion-icon name="arrow-forward" aria-hidden="true" color="#f0f0f0" ></ion-icon>
                            </a>

                        </div>
                      </div>
                
            </li>
          </ul>
        
      </section>
