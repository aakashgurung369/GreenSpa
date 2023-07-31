@php
      $appoint = \App\Models\Appointment::orderby('id', 'desc')->limit(1)->first();
@endphp
<p>
    Your appointment number is {!! $appoint->id !!}. Please remember your appointment id to enter GreenSpa. And Make sure to make your payment in Receptition
</p>