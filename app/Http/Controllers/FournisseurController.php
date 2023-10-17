<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $Fournisseur = Fournisseur::all();
        return view('Fournisseur.liste', ['Fournisseur' => $Fournisseur]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Fournisseur.create');
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
                'nom' => 'required',
                'telephone' => 'required',
                'email' => 'required|email',
                'ville' => 'required',
                'adresse' => 'required',
            ]);
        }
        $Fournisseur = Fournisseur::create($request->post());
        return redirect('Fournisseur')->with('status', 'Fournisseur added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fournisseur $Fournisseur)
    {
        return view('Fournisseur.show', ['Fournisseur' => $Fournisseur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fournisseur $Fournisseur)
    {
        return view('Fournisseur.edit', ['Fournisseur' => $Fournisseur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fournisseur $Fournisseur)
    {
        $Fournisseur->fill($request->post())->save();
        return redirect('Fournisseur')->with('status', 'Fournisseur updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fournisseur $Fournisseur)
    {
        $Fournisseur->delete();
        return redirect('Fournisseur');
    }
}
