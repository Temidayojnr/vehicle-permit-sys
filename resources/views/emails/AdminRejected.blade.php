@component('mail::message')
# Dear Reviewer,

The  Vehicle permit application has been denied for second level approval because you have some missing information were not filled by the applicant,

Kindly attend to it.

@component('mail::button', ['url' => 'http://127.0.0.1:8560/approval1'])
Visit Dashboard
@endcomponent

Thanks,<br>
@endcomponent