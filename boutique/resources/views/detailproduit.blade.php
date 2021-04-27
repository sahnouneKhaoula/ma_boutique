@extends('parents.master')
@section('contenu')

	<div class="container">
		<div class="row">
			<h1>{{ $produit->nom }}</h1>
			<div class="col-lg-6">
				<img src="{{ $produit->imagePrincipale() }}" alt="{{ $produit->nom }}" class="img img-fluid">
				<p>
					{{ $produit->description }}
				</p>
				<p>
					{{ number_format($produit->prix, 0, ',', ' ')  }} DA
				</p>
                <input type="number" name="quantité" id="" for="btn" placeholder="saisir la quantité de produit demandé">
				<p> 
					<a href="{{ route('CommandeProduits.update',$produit->id) }}" class="btn btn-success">Ajouter au panier</a>
				</p>
			</div>
		</div>
	</div>
</body>
</html>
@endsection
