<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Personne;

class Home extends Component
{
    public function render()
    {
        $personnes = Personne::where("personne_id", 1)->get();
        // dd($personnes);
        return view('livewire.front.home', compact('personnes'));
    }
}
