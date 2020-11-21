@component('mail::message')
# Introduction

{{ $message }}

@component('mail::button', ['url' => 'google.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
