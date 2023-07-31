@php
 $services=App\Models\Service::all();
@endphp
<section class="section service" id="services" aria-label="services">
        <div class="container">

          <h2 class="h2 section-title text-center">Service We Provide</h2>

          <p class="section-text text-center">
            Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse
          </p>

          <ul class="grid-list">
            @foreach($services as $service)

            <li>
              <div class="service-card">

                <div class="card-icon">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">{!! $service->name !!}</a>
                </h3>

                <p class="card-text">
                {!! $service->description !!}
                </p>


              </div>
            </li>

            @endforeach

          </ul>

        </div>
      </section>