<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Mail\EmailClient;
use App\Models\Candidat;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{   
    public function email($id){
        //$client= Client::where('id',$id)->first();
        $client = Client::find($id);
        Mail::to($client->email)->send(new EmailClient($client));
        return redirect()->route('clients.index')->with('success','Email Envoyer avec succes!');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::orderby('id','desc')->paginate(6);
        $test=Client::count();
        $test1=Candidat::count();
        return view('admin.clients.index', compact('clients','test','test1'));
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client=Client::all();
        return view('frontend.inscription',compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        $validated = $request->validated();
        Client::create($validated);
        return redirect()->route('renvoie')->with('success','Demande envoyer avec succes!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        
        return redirect()->route('clients.index')
        ->with('success', "donnees clients supprimé avec succès !");
    }
}
