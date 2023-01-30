<?php

namespace App\Http\Controllers;

use App\Models\phase;
use App\Models\project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Http\Request;

class phaseControl extends Controller
{
    //
    public function phaseForm($id){
        $projet = project::find($id);
        return view('phaseF', ['projet'=> $projet]);
    }
    public function annuler($id){
        return redirect('detail/' . $id);
    }
    public function retour($id){
        return redirect('afficher' );
    }
    public function ajout($id){
        $phase = new phase;
        $phase->nom = request('nom');
        $phase->duree = request('duree');
        $phase->priorite = request('priorite');
        $phase->projet_id = $id;
        $phase->save();
        return redirect('detail/' . $id);
    }
   
    public function supp($id){
        $phase = phase::find($id);
        $phase->delete();
        return redirect('/afficher');
    }
}