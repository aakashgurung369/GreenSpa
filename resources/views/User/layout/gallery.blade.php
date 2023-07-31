@php
 $gallerys=App\Models\Gallery::latest()->paginate(4);
@endphp
<section class="section gallery" id="gallery" aria-label="photo gallery">
        <div class="container">

          <div class="title-wrapper">

            <div>
              <h2 class="h2 section-title">Latest Photo Gallery</h2>

            </div>

            <a href="{{ route('user.allgallery') }}" class="btn has-before">
              <span class="span">Explore More Gallery</span>

            </a> 

          </div>

          <ul class="grid-list">
          @foreach($gallerys as $gallery)
            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="{{asset('/Gallery/'.$gallery->image)}}" width="422" height="550" loading="lazy" alt="Image"
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