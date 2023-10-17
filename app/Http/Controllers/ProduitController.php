<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\TypeProduit;

class ProduitController extends Controller
{
    //
    public function index()
    {
        $Produits = Produit::all();
        return view('Produits.liste', ['Produits' => $Produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $TypeProduits = TypeProduit::all();
        return view('Produits.ajoute', ['TypeProduits' => $TypeProduits]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData=$request->post();
        var_dump($formData);exit();
        $formData['image']=$request->image->hashName();
        $Produit=Produit::create($formData);
        $request->file('image')->store('public');
        // if($request->isMethod('post')){
        //     $request->validate([

        //     ]);
        // }

        // Produit::create($request->post());
        // // $request->file('image')->store('public');
        return redirect('Produit')->with('status', 'ProductType added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $Produit)
    {
        return view('Produits.show', ['Produit' => $Produit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id) {
        $Produits=Produit::find($id);
        return view('Produits.edit')->with ('Produits' , $Produits );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $Produit)
    {
        $request->validate([


        ]);

        $Produit->fill($request->post())->save();
        return redirect('Produit')->with('status', 'ProductType updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $Produit)
    {
        $Produit->delete();
        return redirect()->back()->with('flash_message' , 'tmsaaah' );
    }
}
