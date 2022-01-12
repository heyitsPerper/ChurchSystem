@component('mail::message')
# Dear, {{$fullname}}

Thank you for registering our system.
Here's the code for confirmation: {{$code}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
