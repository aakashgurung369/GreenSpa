<section class="section appoin" id="appointment" aria-label="appointment">
        <div class="">

          <div class="appoin-card">

            <figure class="card-banner img-holder" style="width: 25%; --height: 774; border-radius: 0%;">
              <img src="{{asset('GreenSpa/assets/images/appointment1.jpg')}}" width="200px" height="774" loading="lazy" alt="" class="img-cover">
            </figure>

            <div class="card-content">

              <h2 class="h2 section-title">Make Appointment</h2>

              <p class="section-text">
                  
              </p>

              <form action="{{ route('user.appointment') }}" class="appoin-form" method="POST">
                @csrf

                <div class="input-wrapper">
                  <input type="text" name="name" placeholder="Your Name" required class="input-field">

                  <input type="email" name="email" placeholder="Email" required class="input-field">
                </div>

                <div class="input-wrapper">
                  <input type="date" name="date" placeholder="date" required class="input-field">

                  <select name="service" class="input-field">
                    @php
                      $gallery=App\Models\Pricing::all();
                    @endphp
                    <option value="" selected>Category</option>
                    @foreach($gallery as $service)
                      <option value="{!! $service->name !!}">{!! $service->name !!}</option>
                    @endforeach
                  </select>
                </div>

                <textarea name="message" placeholder="Write Message" required class="input-field"></textarea>

                <button type="submit" class="form-btn" onclick="Reload()">
                  <span class="span">Appointment Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true" color="#f0f0f0" ></ion-icon>
                </button>

              </form>

            </div>

            <figure class="card-banner img-holder" style="width: 25%; height: 774; border-radius: 0%;">
              <img src="{{asset('GreenSpa/assets/images/appointment2.jpg')}}" width="250" height="774"  loading="lazy" alt="" class="img-cover">
            </figure>

          </div>

        </div>
      </section>
      <script>
        function Reload() {
            // Reload the page after a short delay
            setTimeout(function() {
                location.reload();
            }, 4000); // Adjust the delay as per your requirements
        }
      </script>

