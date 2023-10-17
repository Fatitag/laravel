<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommandeAchat;
use App\Models\Fournisseur;

class CommandeAchatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $CommandeAchat = CommandeAchat::all();
        return view('CommandeAchat.liste', ['CommandeAchat' => $CommandeAchat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Fournisseur = Fournisseur::all();
        return view('CommandeAchat.create', ['Fournisseur' => $Fournisseur]);
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
                'dateCom' => 'required',
                'fournisseur_id' => 'required',
            ]);
        }
        CommandeAchat::create($request->post());
        return redirect('CommandeAchat')->with('status', 'CommandeAchat added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CommandeAchat $CommandeAchat)
    {
        return view('CommandeAchat.show', ['CommandeAchat' => $CommandeAchat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CommandeAchat $CommandeAchat)
    {
        $Fournisseur = Fournisseur::all();
        return view('CommandeAchat.edit', ['CommandeAchat' => $CommandeAchat, 'Fournisseur' => $Fournisseur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommandeAchat $CommandeAchat)
    {
        $request->validate([
            'dateCom' => 'required',
            'fournisseur_id' => 'required',
        ]);
        $CommandeAchat->fill($request->post())->save();
        return redirect('CommandeAchat')->with('status', 'CommandeAchat updated succefuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommandeAchat $CommandeAchat)
    {
        $CommandeAchat->delete();
        return redirect('CommandeAchat');
    }
}
