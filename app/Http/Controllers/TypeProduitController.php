<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProduit;

class TypeProduitController extends Controller
{
    //
    public function index()
    {
        $TypeProduits = TypeProduit::all();
        return view('TypeProduit.liste', ['TypeProduits' => $TypeProduits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TypeProduit.ajoute');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $request->validate([
                'libelle' => 'required',
            ]);
        }

        TypeProduit::create($request->post());
        return redirect('TypeProduit')->with('status', 'ProductType added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TypeProduit $TypeProduit)
    {
        return view('TypeProduit.show', ['TypeProduit' => $TypeProduit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id) {
        $TypeProduits=TypeProduit::find($id);
        return view('TypeProduit.edit')->with ('TypeProduits' , $TypeProduits );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeProduit $TypeProduit)
    {
        $request->validate([
            'libelle' => 'required',
        ]);

        $TypeProduit->fill($request->post())->save();
        // return redirect()->route('TypeProduit.liste')->with('status', 'ProductType updated successfuly');
        return redirect('TypeProduit')->with('status', 'ProductType updated successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeProduit $TypeProduit)
    {
        $TypeProduit->delete();
        return redirect()->back()->with('flash_message' , 'tmsaaah' );
    }
}


