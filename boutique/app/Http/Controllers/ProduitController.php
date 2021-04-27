<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produits = Produit::orderBy('id','DESC')->get();
        
        return view('produits.index',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Categorie::all();
       return view('Produits.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
      $image = $request->file('image');

      $nomimage = 'produit'.time().uniqid().'.'.$image->getClientOriginalExtension(); // pour récuperer l'éxtention du fichier

       //$image->storeAS('imageproduits',$nomimage);
       //$path = $image->store('public/imageproduits',$nomimage);
        $request->image->move(public_path('imageproduits'), $nomimage);
        $produit = new Produit();

        $produit->nom = $request->nom; 
        $produit->description = $request->description; 
        $produit->image = $nomimage; 
        $produit->prix = $request->prix; 
        $produit->categorie_id = $request->categorie; 
        $produit->save();

        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::find($id);
        return view('produits.show',compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = produit::find($id);
         return view('produits.edit')->with('produit',$produit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $produit = Produit::find($id);
         $produit->nom = $request->nom;
         $produit->description = $request->description; 
         $produit->prix = $request->prix; 
         $produit->save();
         return redirect()->route('produits.index')->with('message','Produit modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        
        $image_path = 'imageproduits/'.$produit->image;  // Value is not URL but directory file path
        if (file_exists($image_path)) {

       @unlink($image_path);

   }
       $produit->delete();
        return redirect()->route('produits.index')->with('messagedelete','Produit supprimée');  
}

 public function detailproduit($id)
    {
        $produit = Produit::find($id);

        return view('detailproduit')->with('produit',$produit);
    }
}

