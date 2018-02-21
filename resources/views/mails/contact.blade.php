@component('mail::message')
# Mesaj nou de la: {{ $data['name'] }} 
<br>
<br>


{{ $data['message'] }}

{{--  @component('mail::button', ['url' => ''])
Button Text
@endcomponent  --}}

<br>

@endcomponent



