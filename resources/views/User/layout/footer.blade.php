<footer class="footer has-bg-image" style="background-color: hsl(0, 0%, 8%)">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

     <!--      <form action="" class="input-wrapper">

            <input type="email" name="email_address" placeholder="Enter Your Email" required class="email-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe Now</span>

            </button>

          </form>  -->

        </div> 

        <div class="footer-link-box">
          <a href="/" class="logo">
            Green spa
            <span class="span">Spa center</span>
          </a>  

          <ul class="footer-list">

            <li >
              <p class="footer-list-title">Quick Links</p>
            </li>

            <li>
              <a href="/#services" class="footer-link has-before">Our Services</a>
            </li>

            <li>
              <a href="/#pricing" class="footer-link has-before">Pricing</a>
            </li>

            <li>
              <a href="/#gallery" class="footer-link has-before">Gallery</a>
            </li>

            <li>
              <a href="/#appointment" class="footer-link has-before">Appointment</a>
            </li>

          </ul>

          <ul class="footer-list">
          @php
            $services=App\Models\Service::all();
          @endphp
            <li>
              <p class="footer-list-title">Services</p>
            </li>
          @foreach($services as $service)
            <li>
              <a class="footer-link has-before">{!! $service->name !!}</a>
            </li>
          @endforeach


          </ul>


          <ul class="footer-list">

            <li>
              <p class="footer-list-title" id="Contact">Contact Us</p>
            </li>
            @php
              $contact=App\Models\Contact::orderby('id', 'asc')->limit(1)->first();
            @endphp

            <li class="footer-list-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="contact-link">
              {!! $contact->Address !!}
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:{!! $contact->Phone !!}" class="contact-link">{!! $contact->Phone !!}</a>
            </li>

            <li class="footer-list-item">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <span class="contact-link">{!! $contact->StartingDay !!} - {!! $contact->EndingDay !!}, {!! $contact->StartingTime !!} - {!! $contact->EndingTime !!}</span>
            </li>

            <li class="footer-list-item">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <a href="mailto:{!! $contact->email !!}" class="contact-link">{!! $contact->email !!}</a>
            </li>
            <div class="social-list footer-list-item" style="display: flex; gap: 1rem; " >
            @php
              $profile=App\Models\Profile::orderby('id', 'asc')->limit(1)->first();
            @endphp
              <li>
                <a href="{!! $profile->facebook !!}" class="social-link" target="_blank">
                  <ion-icon name="logo-facebook" style="color: hsl(150, 60%, 70%);"></ion-icon>
                </a>
              </li>
  
              <li>
                <a href="{!! $profile->insta !!}" class="social-link" target="_blank">
                  <ion-icon name="logo-instagram" style="color: hsl(150, 60%, 70%);"></ion-icon>
                </a>
              </li>
  
              <li>
                <a href="{!! $profile->tiktok !!}" class="social-link" target="_blank">
                  <ion-icon name="logo-tiktok" style="color: hsl(150, 60%, 70%);"></ion-icon>
                </a>
              </li>
  
              <li>
                <a href="{!! $profile->youtube !!}" class="social-link" target="_blank">
                  <ion-icon name="logo-youtube" style="color: hsl(150, 60%, 70%);"></ion-icon>
                </a>
              </li>
            </div>

          </ul>

          
        </div>       

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2023 <a href="https://websoftnepal.com.np/" target="_blank" class="copyright-link"> WebSoft Nepal</a>. All Rights Reserved.
        </p>
      </div>

    </div>
  </footer>
