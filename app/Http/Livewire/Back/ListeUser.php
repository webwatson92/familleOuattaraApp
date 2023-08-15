<?php

namespace App\Http\Livewire\Back;

use Livewire\Component;
use App\Models\Personne;
use Livewire\WithPagination;

class ListeUser extends Component
{
    use WithPagination;
    
    public function supprimerUser(Personne $user){
        $user->delete();
        // Alert::toast("Suppression du compte de l'utilisateur effectué avec succès.", 'success');
        
        return redirect()->route('liste')->with('success', "suppression effectué avec succès");
    }

    public function render()
    {
        $listeUsers = Personne::latest()->paginate(10);
        return view('livewire.back.liste-user', compact('listeUsers'));
    }
}
