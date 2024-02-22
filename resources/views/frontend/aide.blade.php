@extends('frontend.master')
@section('content')
<style>
    /* Votre CSS ici */
    a{
        margin-left: 7%;
    }
    p {
       margin-left: 7%;
    }
    h3 {
        color: rgb(251, 196, 32);
        text-align: center;
    }
</style>
<H3>Aide-ménagère à domicile</H3>
<img src="assets/img/portfolio/e2.jpg" width="600px" heigth="200px" alt="..." />
<h3>Soumaya Services vous propose le service régulier d une aide-ménagére</h3>
<p>qualifiée qui peut se consacrer, selon vos besoins:</p>
<p>- à l entretien de l habitation</p>
<p>- aux lessives</p>
<p>- au repassage</p>
<p>- aux courses ménagères</p>
<p>- à la préparation de repas</p>
{{--  @include('frontend.form')  --}}
<h3>Vous recherchez une aide menagere?inscriver vous gratuitement</h3>
<a class="btn btn-primary btn-xl text-uppercase" href="{{ route('inscription') }}">Inscription</a>
@endsection