<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CommandeVente;
use App\Models\clients;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->authorizeResource(CommandeVente::class);
    }
    public function index()
    {
        // $clients = clients::find(1);
        // echo $clients->commandes_ventes[0]->dateCom;
        // exit();
        // $commande_ventes = commande_ventes::all();
        // return view('commande_ventes.liste') ->with ( 'commande_ventes' , $commande_ventes);
        $commandes = CommandeVente::with('clients')->get();
        return view('commende.liste', ['commandes'=> $commandes,
    ]);
    // $CommandeVentes = CommandeVente::all();
    // return view('CommandeVente.index', ['CommandeVentes' => $CommandeVentes]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clients = clients::all();
        return view('commende.ajout', ['clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //





        if($request->isMethod('post')){
            $request->validate([
                'dateCom' => 'required',
                'client_id' => 'required',
                'commandes' => 'required'
            ]);
        }
        CommandeVente::create($request->post());
        return redirect('command')->with('flash_message', 'Student Added! ');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $commandes=CommandeVente::find($id);
        return view('commende.show')->with('commandes' , $commandes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id) {
        $commandes=CommandeVente::find($id);
        return view('commende.edit')->with ('commandes' , $commandes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
       $commandes=CommandeVente::find($id);
       $input=$request->all();
       $commandes->update($input);


     return redirect('commandes')->with  ('flash_message', 'Client update! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = CommandeVente::find($id);
        $delete->delete();
        return redirect()->back()->with('flash_message' , 'tmsaaah' );
    }
}
