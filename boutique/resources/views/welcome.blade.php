@extends('parents.master')
@section('contenu')

@if(session('message'))
<div class="alert alert-danger">
{{ session('message') }}
	
</div>
@endif
	<div class="container"> {{-- 15 px droit , 15 gauche--}}
		<div class="row m-5"> {{-- 2 colone hadi 30% et l'autre div 70%'--}}
			<div class="col-lg-3">
            <div >
             <img src="{{ asset('images/slide2.gif') }}" alt="" class="img img-fluid">
             </div>
             <br>
				<div class="list-group ">
					@foreach($categories as $categorie)
					<a href="{{ route('detailcategorie',$categorie) }}" class="list-group-item">{{ $categorie->nom }}</a>
					@endforeach
				</div>
			</div>
			<div class="col-lg-9">
				
				<img src="{{ asset('images/slide.jpg') }}" alt="" class="img img-fluid">
			</div>
		</div>
		<div class="row">
			@foreach($produits as $produit)
			
			<div class="col-lg-3 mt-4 mx-0">
				<a href="{{ route('detailproduit',$produit->id) }}" class="mx-0">
				<div class="card">
					<img src="{{ $produit->imagePrincipale() }}" alt="" class="img img-fluid" >
					<div class="card-body">
						<strong>{{ $produit->nom }}</strong>
						<p>{{  Str::limit($produit->description,50) }}</p>
						<span class="float-right">{{ $produit->prix }} DA</span>
					</div>
				</div>
				</a>
			</div>
			
			@endforeach
@endsection
{{--
		</div>
	</div>
</body>
</html>
--}}
