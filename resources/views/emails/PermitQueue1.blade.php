@component('mail::message')
# Dear Supervisor,

A Vehicle permit application has been sent to you for second stage approval,

Kindly attend to it.

@component('mail::button', ['url' => 'http://127.0.0.1:8560/approval2'])
Visit Dashboard
@endcomponent

Thanks,<br>
@endcomponent