@extends('parents.master')

@section('contenu')
<style type="text/css">
          
          #container{width:85%;}
          #img{float:left;width:100px; padding :20px }
          #list{ auto;width:100%; margin-left :180px}
          .img {
    width: 180px;
    height: 300px;
    border: 3px solid #00000;
}
          </style>
<div class="card mt-5">
	<div class="card-header">
		Details Produit
	</div>
    <div id="container">
     <div id="img"><img src="{{ $produit->imagePrincipale() }}" class="img" ></div>
          
    <div class="card-body" id ="list">
  
		<ul class="list-group">
            <li class="list-group-item"><strong>Nom :</strong> {{ $produit->nom }}</li>
			<li class="list-group-item"><strong>Prix :</strong>{{ $produit->prix }}</li>
		    <li class="list-group-item"><strong>Crée le :</strong>{{ $produit->created_at }}</li>
            <li class="list-group-item"><strong>Description :</strong><textarea class="form-control" rows="10">{{ $produit->description }}</textarea></li>
            
            
		</ul>
		
	</div>
    </div>
</div>
@endsection
