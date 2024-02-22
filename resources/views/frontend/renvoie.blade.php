<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <style>
       body{
        background-color: #212529;
        background-image: url("../assets/img/map-image.png");
        background-repeat: no-repeat;
        background-position: center;
      }
      h1 {
        color: #e39b2f;
      }
    
     </style>
    </head>
    <body>
    <section class="container">
    <h1 class="mt-5">Soumaya Service</h1>
   
    <div class="card mt-5">
     <div class="card-header bg-warning text-light">
     Demande 
    </div>
    <div class="card-body">
     Demande envoyer avec succés
     Soumaya services toujours la pour vous satisfaire
    </div> 
    </div>
    <a href="{{ route('homes') }}" class="btn btn-warning text-light mt-5">Acceuil</a>
    </section>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
</div>