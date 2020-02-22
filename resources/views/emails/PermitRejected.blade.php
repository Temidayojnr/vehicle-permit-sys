@component('mail::message')
# Dear {{$approve->FirstName}},

Your Vehicle permit application has been denied because you have some missing information that must be filled,

Kindly attend to it.

@component('mail::button', ['url' => 'http://127.0.0.1:8560/application'])
Visit Dashboard
@endcomponent

Thanks,<br>
@endcomponent