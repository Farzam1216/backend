@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Email : {{$Email}}
Password : {{$Password}}
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
