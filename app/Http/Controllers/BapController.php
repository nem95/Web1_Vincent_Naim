<?php

namespace App\Http\Controllers;

use App\Models\Bap;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class BapController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

        $this->middleware('admin', ['only'=>['show','edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bap = Bap::all();
        $users = Auth::user();
        //dd($baps);
        return view('baps.index')->with(compact('bap', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->lists('name','id');
        return view('baps.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ValidationBapRequest $request)
    {
        $bap = new Bap;
        $bap->user_id = Auth::user()->id;
        $bap->title = $request->title;
        $bap->name = $request->name;
        $bap->firstname = $request->firstname;
        $bap->fonction = $request->fonction;
        $bap->adresse_client = $request->adresse_client;
        $bap->email = $request->email;
        $bap->telephone = $request->telephone;
        $bap->nom_prenom = $request->nom_prenom;
        $bap->adresse_contact = $request->adresse_contact;
        $bap->mail_contact = $request->mail_contact;
        $bap->name = $request->tel_contact;
        $bap->description = $request->description;
        $bap->site = $request->site;
        $bap->three_d = $request->three_d;
        $bap->two_d = $request->two_d;
        $bap->multi = $request->multi;
        $bap->jeux_video = $request->jeux_video;
        $bap->print = $request->print;
        $bap->cd_rom = $request->cd_rom;
        $bap->event = $request->event;
        $bap->autre = $request->autre;
        $bap->demande = $request->demande;
        $bap->contexte = $request->contexte;
        $bap->objectif = $request->objectif;
        $bap->contrainte = $request->contrainte;
        $bap->description = $request->description;
        $bap->save();
        return redirect()->route('baps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $bap = Bap::findOrFail($id);
            return view('baps.show')->with(compact('bap'));
        }catch(\Exception $e){
            return redirect()->route('baps.index')->with((['erreur' => 'Erreur biatch']));
        };
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bap = Bap::find($id);
        return view('baps.edit')->with(compact('bap'));
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
        //dd($request->Valider);
        //dd($bap);
        $bap = Bap::find($id);
        $bap->validate = $request->validate;
        $bap->update();
        return redirect()->route('baps.show',$bap->id)->with(compact('bap'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
