@php
 $services=App\Models\Service::all();
@endphp

<section class="section pricing has-bg-image has-before" id="pricing" aria-label="pricing"
        style="background-image: url('GreenSpa/assets/images/pricingBanner.jpg')">
        <div class="container">

          <h2 class="h2 section-title text-center">Awesome Pricing Plan</h2>

          <p class="section-text text-center">
            Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse
          </p>

          <div class="pricing-tab-container">

            <ul class="tab-filter">

              <li>
                <button class="filter-btn active" data-filter-btn="all">
                  <div class="btn-icon">
                    <i class="flaticon-beauty-salon" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">All Pricing</p>
                </button>
              </li>
            @foreach($services as $service)
              <li>
                <button class="filter-btn" data-filter-btn="{!! $service->slug !!}">
                  <div class="btn-icon">
                    <i class="flaticon-relax" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">{!! $service->name !!}</p>
                </button>
              </li>
            @endforeach


            </ul>
            @php
              $pricings=App\Models\Pricing::all();
            @endphp

            <ul class="grid-list">
            @foreach($pricings as $pricing)
              <li data-filter="{!! $pricing->slug !!}">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="{{asset('/Pricing/'.$pricing->image)}}" width="90" height="90" alt=""
                      class="img-cover-price">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">{!! $pricing->name !!}</h3>

                    <p class="card-text">{!! $pricing->description !!}</p>
                  </div>

                  <data class="card-price" value="89">रु{!! $pricing->price !!}</data>

                </div>
              </li>
            @endforeach

            </ul>

          </div>

        </div>
      </section>