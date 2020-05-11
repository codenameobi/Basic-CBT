@component('mail::message')
# Hello from BasicCBT

Here is your Test result from BasicCBT quiz.

<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
