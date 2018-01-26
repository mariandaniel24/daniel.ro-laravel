@component('mail::message')
# @lang('contact.mail_hello') {{ $data['name'] }} 
<br>
# @lang('contact.mail_received')
<br>


{{ $data['message'] }}

{{--  @component('mail::button', ['url' => ''])
Button Text
@endcomponent  --}}

<br>
@lang('contact.mail_thanks') <br>

@endcomponent


