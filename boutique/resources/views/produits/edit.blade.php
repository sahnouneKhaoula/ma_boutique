@extends('parents.master')

@section('contenu')

<div class="card mt-5">
					<div class="card-header">
						Modification Produit
					</div>
					<div class="card-body">
						<form action="{{ route('produits.update',$produit->id) }}" method="POST">
							
					@method('PUT')
					@csrf
                    <label for="">Nom produit</label>
					<input type="text" name="nom" class="form-control mb-3" value="{{ $produit->nom }}" required>
                    <label for="">Prix produit</label>
					<input type="text" name="prix" class="form-control mb-3" value="{{ $produit->prix }}" required>
                    <label for="">Description produit</label>
					<textarea class="form-control" rows="5" name="description">{{ $produit->description }}</textarea>
                    
					<button type="submit" class="btn btn-warning">Modifier le Produit</button>
				</form>
					</div>
				</div>
@endsection
