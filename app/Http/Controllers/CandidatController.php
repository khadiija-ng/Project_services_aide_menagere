<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatRequest;
use App\Models\Candidat;
use App\Models\Client;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidats = Candidat::orderby('id','desc')->paginate(5);
        $test=Client::count();
        $test1=Candidat::count();
        return view('admin.candidats.index', compact('candidats','test','test1'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $candidats = Candidat::all();
        return view('frontend.job',compact('candidats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CandidatRequest $request)
    {
        $validated = $request->validated();
        Candidat::create($validated);
        return redirect()->route('job')->with('success','candidature envoyer avec succés !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidat $candidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidat $candidat)
    {
        $candidat->delete();
        
        return redirect()->route('candidats.index')
        ->with('success', "donnees candidat supprimé avec succès !");
    }
}
