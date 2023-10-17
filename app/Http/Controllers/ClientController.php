<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;
use App\Models\CommandeVente;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->authorizeResource(clients::class);
    }
    public function index()
    {
        // $clients = clients::find(1);
        // echo $clients->commandes_ventes[0]->dateCom;
        // exit();
        $clients = clients::all();
        return view('clients.index') ->with ( 'clients' , $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clients.create');
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





           $input = $request->all();
            clients::create($input);
            return redirect('clients')->with('flash_message', 'Student Added! ');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $clients=clients::find($id);
        return view('clients.show')->with('clients' , $clients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id) {
        $clients=clients::find($id);
        return view('clients.edit')->with ('clients' , $clients);
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
       $clients=clients::find($id);
       $input=$request->all();
       $clients->update($input);


     return redirect('clients')->with  ('flash_message', 'Client update! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = clients::find($id);
        $delete->delete();
        return redirect()->back()->with('flash_message' , 'tmsaaah' );
    }
}
