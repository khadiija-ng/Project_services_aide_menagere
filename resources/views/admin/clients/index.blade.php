<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>  --}}

    <!-- Fonts -->
    {{--  <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])  --}}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Service de Nettoyage</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-warning navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ ('Soumaya Service') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            @php
                $route = request()->route()->getName();
            @endphp
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('candidats.index') }}" @class(['nav-link','active'=> str_contains($route,'candidat.')])>{{ __('Candidat') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clients.index') }}"  @class(['nav-link','active'=> str_contains($route,'client.')])>{{ __('Client') }}</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Se Deconnecter') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div>
</nav>
<style>
h1{
    color: #ffc800;

}
</style>
<div class="d-flex justify-content-between align-items-center">
    
<h1>Nos Clients</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        @if (session('success'))
        <div class="btn btn-warning">
            {{ session('success') }}
        </div>
        @endif
<table class="table table-striped ">
    <thead>
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Telephone</th>
            <th >Adresse email</th>
            <th>Adresse Physique</th>
            <th>Services</th>
            <th class="text-end">Actions</th>
        </tr>
    </thead> 
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->prenom }}</td>  
                <td>{{ $client->name }}</td>  
                <td>{{ $client->phone }}</td>  
                <td>{{ $client->email }}</td>  
                <td>{{ $client->adresse }}</td>  
                <td>{{ $client->frequence}}</td>  
             <td>
                <div class="d-flex gap-2 w-100 justify-content-end">
                    <form action="{{ route('clients.destroy',$client->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                                <button onclick="return confirm('Êtes-vous sûr ?')"
                                type="submit" class="btn btn-danger btn-sm">
                                    Supprimer
                                </button>
                    </form>
                    <a href="{{ route('email',$client->id)}}" class="btn btn-primary">
                        Email
                    </a>
                </div>
             </td>
            </tr>
        @endforeach
    </tbody>         
</table>
</div>

</div>
@include('frontend.footer')
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
{{--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>  --}}
</body>
</html>
