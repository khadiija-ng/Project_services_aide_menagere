<x-mail::message>
# Validation Demande
<h5>Bonjour  {{ $client->prenom }} {{  $client->name }}</h5><br>
<p>suite a votre demande on vous envoie ce mail pour vous</p>
<p>informer de la disponiblite de votre demande pour le service {{ $client->frequence }} </p>
<p>demandé </p>

{{--  <x-mail::button :url="''">
Button Text
</x-mail::button>  --}}

<p>Merci d avoir fait votre demande sur,</p><br>
{{ config('app.name') }}
</x-mail::message>
