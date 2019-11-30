@component('mail::message')
# Bonjour {{$content['name']}}

{{$content['message'] }}

@component('mail::button', ['url' => $content['url_confirm']])
Confirmer
@endcomponent

Cordialement, <br>
{{ config('app.name') }}
@endcomponent
