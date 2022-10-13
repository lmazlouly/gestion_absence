<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;

class EleveController extends Controller
{
    public function index() {
        $eleves = Eleve::all();
        return view('gestion_eleve')->with('eleves', $eleves);
    }

    public function ajouterPage() {
        return view('ajouter_eleve');
    }

    public function ajouter(Request $request) {
        $eleve = new Eleve([
            'cne' => $request->cne,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'groupe' => $request->groupe,
        ]);
        $eleve->save();
        return redirect(url('gestion_eleve'));
    }
}
