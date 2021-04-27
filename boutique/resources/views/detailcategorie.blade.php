@extends('parents.master')
@section('contenu')
	<div class="container">
		<div class="row ">
			<h1 class="text-center">{{ $categorie->nom }}</h1>
			
			@foreach($categorie->produits as $produit)

		<div class="col-lg-3 mt-4 mx-0">
				<a href="{{ route('detailproduit',$produit->id) }}" class="mx-0">
				<div class="card">
					<img src="{{ $produit->imagePrincipale() }}" alt="" class="img img-fluid">
					<div class="card-body">
						<strong>{{ $produit->nom }}</strong>
						<p>{{  Str::limit($produit->description,50) }}</p>
						<span class="float-right">{{ $produit->prix }} DA</span>
					</div>
				</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</body>
</html>
@endsection
