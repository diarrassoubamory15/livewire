<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FichierExemple extends Component
{

    public $fichier = [];
    public $message;

    public function addFichier()
    {
        $this->fichier[] = count ($this->fichier) + 1;
    }

    public function deleteFichier($key)
    {
        unset ($this->fichier[$key]);
    }

    public function render()
    {
        return view('livewire.fichier-exemple');
    }
}
