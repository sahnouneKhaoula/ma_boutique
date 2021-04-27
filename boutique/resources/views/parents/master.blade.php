
<!DOCTYPE html>
<html lang="fr"  >
<head>
<style>
   body {
 background-color: #D24dff;
  }
</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ma boutique</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-4.6.0-dist\css\bootstrap.css') }}">
</head>
<body >
<style>
   
  .navbar{
    background-color: #ECE0F8;
}
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('welcome')}}">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('produits.index') }}">Produits</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index')}}">Categories</a>
      </li>
      
    </ul>
    
    
    <form  class="form-inline my-2 my-lg-0" method="get" action="{{ route('login')}}">
     @csrf
    <button class="btn  my-2 my-sm-0" type="submit">Se connecter</button>
    </form>
    <form  class="form-inline my-2 my-lg-0" method="get" action="{{ route('register')}}">
     @csrf
    <button class="btn  my-2 my-sm-0" type="submit">S'inscrir</button>
    </form>
    <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('logout') }}">
      @csrf
     <button class="btn  my-2 my-sm-0" type="submit">Se deconnecter</button>
    
    </form>
       
  </div>
</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				@yield('contenu')

			</div>
		</div>
	</div>
</body>
</html>


