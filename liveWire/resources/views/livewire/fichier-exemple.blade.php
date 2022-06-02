<div>
    <span class="btn btn-primary" wire:click="addFichier">+Ajouter un champ</span>
    @foreach($fichier as $key => $value)

        <br/><br/>
        Champ {{ $value }}<br/><textarea wire:model="message" name="fichier[]" cols="40"></textarea>       
        <br/>
        <h1>{{ $message }}</h1>
        <span class="btn btn-danger" wire:click="deleteFichier( {{ $key }} )">Supprimer</span>

    @endforeach 

    
</div>
