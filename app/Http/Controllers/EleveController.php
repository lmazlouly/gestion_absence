<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use Illuminate\Http\Request;
use App\Models\Eleve;

class EleveController extends Controller
{

    public function eleveAbsences(Eleve $eleve, Request $request) {
        $nbr_abs = 0;
        $absences = Absence::where('cne', $eleve->cne)->get();
        if ($request->semaine)
            $nbr_abs = Absence::where('cne', $eleve->cne)->where('semaine', $request->semaine)->first()->nbr_abs;
        return view('eleve', compact('eleve' , 'absences', 'nbr_abs'));
    }

    public function index() {
        $eleves = Eleve::all();
        return view('gestion_eleve')->with('eleves', $eleves);
    }

    public function ajouterPage() {
        return view('ajouter_eleve');
    }

    public function modifierPage($cne) {
        $eleve = Eleve::where('cne', $cne)->first();
        return view('modifier_eleve')->with('eleve', $eleve);
    }

    public function supprimerPage($cne) {
        $eleve = Eleve::where('cne', $cne)->first();
        return view('supprimer_eleve')->with('eleve', $eleve);
    }

    public function ajouter(Request $request) {
        $eleve = new Eleve([
            'cne' => $request->cne,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'groupe' => $request->groupe,
        ]);
        $eleve->save();
        return redirect(url('gestion_eleves'));
    }

    public function modifier(Request $request, $cne) {
        Eleve::where('cne', $cne)->update([
            'nom' => $request->nom,
            'prenom' => $request->nom,
            'groupe' => $request->groupe,
        ]);
        // $eleve->save();
        return redirect(url('gestion_eleves'));
    }

    public function supprimer(Request $request, $cne) {
        if ( $request->confirm == 'oui' )
            Eleve::where('cne', $cne)->delete();
        return redirect(url('gestion_eleves'));
    }
}
