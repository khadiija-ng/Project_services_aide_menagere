@extends('layouts.app')
@section('content')

<section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Demande d-aide Menagere</h2>
                    <h3 class="section-subheading text-muted">Notre devise c est toujours vous satisfaire</h3>
                </div>
               
                <form action="{{ route('clients.store') }}" method="POST" id="contactForm" >
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" placeholder="Prenom" required autocomplete="prenom" autofocus>
                                @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nom" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="phone" required autocomplete="phone" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('prenom') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="prenom" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" placeholder="adresse" required autocomplete="adresse" autofocus>
                                @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                {{--  <select class="form-select" placeholder="Services" id="frequence" name="frequence" required autocomplete="frequence" autofocus>
                                    <option value="1">Aide Ménagere</option>
                                    <option value="2">Repassage</option>
                                    <option value="3">Cuisinier</option>
                                    <option value="4">Pressing</option>
                                  </select>  --}}
                                  <input id="frequence" type="text" class="form-control @error('frequence') is-invalid @enderror" name="frequence" value="{{ old('frequence') }}" placeholder="Services" required autocomplete="frequence" autofocus>
                                 
                                   @error('frequence')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            
                        </div>
                        {{--  <div class="col-md-6">
                            <div class="form-group">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" placeholder="Prenom" required autocomplete="prenom" autofocus>
                                <textarea class="form-control@error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" placeholder="Votre Message" required autocomplete="message" autofocus" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>  --}}
                    </div>
                   
                    {{--  <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>  --}}
                   
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase " type="submit">Envoyer Demande</button></div>
                </form>
            </div>
            </section>
            @endsection