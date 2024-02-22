@extends('frontend.master')

@section('content')
<style>
    /* Votre CSS ici */
   
    h2 {
        color: white;
        text-align: center;
    }
    p {
        color: white;
    }
</style>
<section class="page-section" id="contact">
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
            <!-- Portfolio item 1-->
            <div class="portfolio-item">
                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        {{--  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>  --}}
                    </div>
                    <img class="img-fluid mt-4" src="assets/img/portfolio/e1.jpg" alt="..." />
                </a>
            </div>
        </div>
        <h2>Intéressé par un emploi chez Soumaya Service?</h2>
        <p>Notre société se développant rapidement, nous avons régulièrement des postes à pourvoir pour des fonctions allant de l aide ménagère au responsable d agence.</p>
        <p>Vous souhaitez travailler comme aide-ménagère? Faites le premier pas et complétez le formulaire ci-dessous!</p>
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contactez Nous</h2>
                <h3 class="section-subheading text-muted">n importe quel heure nous vous satisferons</h3>
            </div>
<div class="container">
    <div class="row justify-content-center">
        @if (session('success'))
        <div class="btn btn-warning">
            {{ session('success') }}
        </div>
        @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('candidats.store') }}" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        @csrf

                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Numero Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="telephone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Services') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cv" class="col-md-4 col-form-label text-md-end">{{ __('CV') }}</label>

                            <div class="col-md-6">
                                <input id="cv" type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" value="{{ old('cv') }}" required autocomplete="cv" autofocus>

                                @error('cv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection


