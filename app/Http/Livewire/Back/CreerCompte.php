<?php

namespace App\Http\Livewire\Back;

use Livewire\Component;
use App\Models\Personne;

class CreerCompte extends Component
{
    public $nom, $prenom, $surnom, $date_naissance, $lieu_naissance, $profession, $bio, $personne_id, $error;

    public function ajouterCompte(Personne $personne){

        $this->validate([
            'nom' =>"string|required|min:5",
            'prenom' =>"string|required",
            'surnom' =>"string|required",
            'date_naissance' =>"date|required",
            'lieu_naissance' =>"string|required",
            'profession' =>"string|required",
            'bio' =>"string|required|min:100",
            //'personne_id' =>"integer|required"
        ]);
        try{
                $personne->nom = $this->nom;
                $personne->prenom = $this->prenom;
                $personne->surnom = $this->surnom;
                $personne->date_naissance = $this->date_naissance;
                $personne->lieu_naissance = $this->lieu_naissance;
                $personne->profession = $this->profession;
                $personne->bio = $this->bio;
                // $personne->personne_id = $this->personne_id;
                $personne->save();
                //Alert::toast('La personne a été ajoutée avec succès.', 'success');
                //Alert::success('Félicitation !', 'Niveau scolaire ajoutée avec succès.');
                return redirect()->route('liste')->with('success', "La personne a été ajoutée avec succès.");
            
        }catch(Exeception $e){
            //traitement de l'exeception
        }
    }

    public function render()
    {
        //$parentList = Personne::where();
        return view('livewire.back.creer-compte');
    }
}
