@component('mail::message')
# Dear {{$approve->FirstName}},

Your Vehicle permit application has been sent Approved,

Kindly visit the nearest branch for collection and also visit your dashboard for Permit confirmation

@component('mail::button', ['url' => 'http://127.0.0.1:8560/application'])
Visit Dashboard
@endcomponent

Thanks,<br>
@endcomponent