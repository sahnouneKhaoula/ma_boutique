@extends('parents.master')

@section('contenu')
@if(session('message'))
	<div class="alert alert-success" role="alert">
  {{ session('message') }}
</div>
@endif
	@if(session('messagedelete'))
	<div class="alert alert-danger" role="alert">
  {{ session('messagedelete') }}
</div>
@endif 
<div class="card mt-5">
	<div class="card-header">
		Liste des produits
		<a href="{{ route('produits.create') }}" class="btn btn-outline-success float-right">Ajouter un produit</a>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>N°</th>
					<th>Nom</th>
					<th>Image</th>
					<th>Prix</th>
					<th>Categorie</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produits as $key => $produit)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $produit->nom }}</td>
					<td>
						<img src="{{ $produit->imagePrincipale() }}" width="50">
					</td>
					<td>{{ $produit->prix }}</td>
					<td>{{ $produit->categorie->nom }}</td>
					<td>
									<div class="btn-group">
									<a href="{{ route('produits.show',$produit->id) }}" class="btn btn-info">detail</a>
									<a href="{{ route('produits.edit',$produit->id) }}" class=" btn btn-warning">modifier</a>

									<form action="{{ route('produits.destroy',$produit->id) }}" method="post">
									@method('DELETE')
									@csrf
									<button type="submit" class="btn btn-danger">supprimer</button>
									</form>
									</div>
							
								</td>
				</tr> 
               @endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection
