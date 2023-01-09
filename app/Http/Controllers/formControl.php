<?php

namespace App\Http\Controllers;

use App\Models\phase;
use Illuminate\Http\Request;
use App\Models\project;
class formControl extends Controller
{
    //
    public function form(){
        $projet = new project;
        return view('form', ['project'=> $projet]);
    }
    public function ajouter(){
        $projet = new project;
        $projet->nom = request('nom');
        $projet->description = request('description');
        $projet->dateDebut = request('dateDebut');
        $projet->dateFin = request('dateFin');

        $projet->save();
        $projet = project::all();
        return view('liste', ['projet'=> $projet]);
    }
    public function modifForm($id){
        $projet = project::find($id);
        return view('modif', compact('projet'));
    }
    public function modifier($id){
        $projet = project::find($id);
        $projet->nom = request('nom');
        $projet->description = request('description');
        $projet->dateDebut = request('dateDebut');
        $projet->dateFin = request('dateFin');
        $projet->update();
        
        return redirect('afficher');
    }
    public function supp($id){
        $projet = project::find($id);
        $projet->delete();
        return redirect('afficher');
    }
    public function afficher(){
        $projet = project::all();
        return view('liste', ['projet'=> $projet]);
    }
    public function detail($id){
        $projet = project::find($id);
        return view('detail', ['projet'=> $projet]);
    }
}
