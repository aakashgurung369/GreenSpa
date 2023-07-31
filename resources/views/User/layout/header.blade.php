      @php
        $contact=App\Models\Contact::orderby('id', 'asc')->limit(1)->first();
      @endphp
      
<div class="header-top">
      <div class="container">

        <ul class="header-top-list">

          <li class="header-top-item">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

            <p class="item-text">Call Us :</p>

            <a href="tel:{!! $contact->Phone !!}" class="item-link">{!! $contact->Phone !!}</a>
          </li>

          <li class="header-top-item">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

            <p class="item-text">Opening Hour :</p>

            <p class="item-text">{!! $contact->StartingDay !!} - {!! $contact->EndingDay !!}, {!! $contact->StartingTime !!} - {!! $contact->EndingTime !!}</p>
          </li>
          @php
            $profile=App\Models\Profile::orderby('id', 'asc')->limit(1)->first();
          @endphp

          <li>
            <ul class="social-list">

              <li>
                <a href="{!! $profile->facebook !!}" class="social-link" target="_blank">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="{!! $profile->insta !!}" class="social-link" target="_blank">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="{!! $profile->tiktok !!}" class="social-link" target="_blank">
                  <ion-icon name="logo-tiktok"></ion-icon>
                </a>
              </li>

              <li>
                <a href="{!! $profile->youtube !!}" class="social-link" target="_blank">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>
