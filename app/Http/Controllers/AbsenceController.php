<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;
use App\Models\Eleve;

class AbsenceController extends Controller
{
    public function index(Request $request) {
        $absences = Absence::orderBy('nbr_abs');
        if ( $request->semaine )
            $absences = $absences->where('semaine', $request->semaine);
        $absences = $absences->get();
        return view('gestion_absence')->with('absences', $absences);
    }

    public function ajouterPage() {
        $eleves = Eleve::all();
        return view('ajouter_absence')->with('eleves', $eleves);
    }

    public function modifierPage(Request $request) {
        $eleve = Eleve::where('cne', $request->cne)->first();
        $absence = Absence::where('cne', $request->cne)->where('semaine', $request->semaine)->first();
        return view('modifier_absence', compact('absence', 'eleve'));
    }

    public function supprimerPage($cne, $semaine) {
        $absence = Absence::where('cne', $cne)->where('semaine', $semaine)->first();
        return view('supprimer_absence')->with('absence', $absence);
    }

    public function ajouterOuModifier(Request $request) {
        Absence::updateOrCreate(
            [ 'cne' => $request->cne, 'semaine' => $request->semaine ],
            [ 'nbr_abs' => $request->nbr_abs ]
        );
        return redirect(url('gestion_absence'));
    }

    public function supprimer(Request $request, $cne, $semaine) {
        if ( $request->confirm == 'oui' )
            Absence::where('cne', $cne)->where('semaine', $semaine)->delete();
        return redirect(url('gestion_absence'));
    }
}
