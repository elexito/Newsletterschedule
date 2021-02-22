@component('mail::message')
# Monthly Newsletter



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Welcome to our Monthly Newsletter<br>
{{ config('app.name') }},<br>
To unsubscribe to this Newsletter, click the link below: <a href="http://localhost:8000/unsubscribe?id={{ $subscriber_id }}">Unsubscribe</a>
@endcomponent

