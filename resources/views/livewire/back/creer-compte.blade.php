<div class="p-2 bg-white shadow-sm">
    <form action="" method="post" wire:submit.prevent="ajouterCompte()">
       @csrf
       @method('post')
       @if(Session::get('error'))
           <div class="p-5">
               <div class="border-red-500 p-5 bg-red-100 animate-bounce">{{ Session::get('error') }}</div>
           </div>
       @endif
       @if($error)
            <div class="p-5">
                <div class="block p-2 bg-red-700 text-white rounded-sm shadow-sm mt-2 animate-bounce 
                ">{{ $error }}</div>
            </div>
        @endif
       <div class="p-5">
            <label for="">{{ __('Nom') }}</label>
            <input wire:model="nom" type="text" class="block mt-1 
                            @error('nom') border-red-600 bg-red-100 animate-bounce @enderror 
                            rounded-md w-full border-gray-300">
            @error('nom')
                <div class="">* Le champ nom est requis </div>
            @enderror
        </div>
        <div class="p-5">
            <label for="">{{ __('Préom') }}</label>
            <input wire:model="prenom" type="text" class="block mt-1 
                            @error('prenom') border-red-600 bg-red-100 animate-bounce @enderror 
                            rounded-md w-full border-gray-300">
            @error('prenom')
                <div class="">* Le champ prenom est requis </div>
            @enderror
        </div>
        <div class="p-5">
            <label for="">{{ __('Surom') }}</label>
            <input wire:model="surnom" type="text" class="block mt-1 
                            @error('surnom') border-red-600 bg-red-100 animate-bounce @enderror 
                            rounded-md w-full border-gray-300">
            @error('surnom')
                <div class="">* Le champ surnom est requis </div>
            @enderror
        </div>
        <div class="p-5">
            <label for="">{{ __('Date Naissance') }}</label>
            <input wire:model="date_naissance" type="date" class="block mt-1 
                            @error('date_naissance') border-red-600 bg-red-100 animate-bounce @enderror 
                            rounded-md w-full border-gray-300">
            @error('date_naissance')
                <div class="">* Le champ date naissance est requis </div>
            @enderror
        </div>
        <div class="p-5">
            <label for="">{{ __('Lieu Naissance') }}</label>
            <input wire:model="lieu_naissance" type="text" class="block mt-1 
                            @error('lieu_naissance') border-red-600 bg-red-100 animate-bounce @enderror 
                            rounded-md w-full border-gray-300">
            @error('lieu_naissance')
                <div class="">* Le champ lieu naissance est requis </div>
            @enderror
        </div>
        <div class="p-5">
            <label for="">{{ __('Profession') }}</label>
            <input wire:model="profession" type="text" class="block mt-1 
                            @error('profession') border-red-600 bg-red-100 animate-bounce @enderror 
                            rounded-md w-full border-gray-300">
            @error('profession')
                <div class="">* Le champ profession est requis </div>
            @enderror
        </div>
        <div class="p-5">
            <label for="">{{ __('Bio') }}</label>
            <textarea wire:model="bio" cols="30" rows="5" 
                class="block mt-1 
                @error('bio') border-red-600 bg-red-100 animate-bounce @enderror 
            rounded-md w-full border-gray-300")></textarea>
            @error('bio')
                <div class="">* Le champ bio est requis </div>
            @enderror
        </div>
       {{-- <div class="p-5">
            <label for="">{{ __('Choix du niveau') }}</label>
            <select wire:model="niveau_id" class="block mt-1 
                @error('niveau_id') border-red-600 bg-red-100 animate-bounce @enderror 
                rounded-md w-full border-gray-300">
                <option></option>
                @foreach($niveauxDeLanneActive as $item)
                    <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                @endforeach
            </select>
            @error('niveau_id')
                <div class="">* Le champ niveau est requis </div>
            @enderror
        </div> --}}

       
       <div class="p-5 flex justify-between items-center">

           <button  class="bg-red-600 px-3 py-3 rounded-sm text-white">{{ __("Retour") }}</button>
           <button type="submit" class="bg-red-400 px-3 py-3 rounded-sm text-white">{{ __("Ajouter") }}</button>
       </div>

    </form>
</div>