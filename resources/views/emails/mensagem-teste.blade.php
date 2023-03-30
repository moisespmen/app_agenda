@component('mail::message')
# Introdução

Corpo da mensagem!

@component('mail::button', ['url' => ''])
Texto botao
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
