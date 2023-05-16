<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        <div class="flex m-2 p-2">
            <a href="{{ route('admin.demandes.index') }}"
                class="px-10 py-2 bg-indigo-300 hover:bg-indigo-600 rounded-lg text-white font-weight-bold">
                <svg class="h-6 w-6 flex-no-shrink fill-current inline-block" fill="none" stroke="currentColor"
                    stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5"></path>
                </svg>
                Liste des demandes

            </a>

        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



                <form method="POST" action="{{ route('admin.demandes.update', $demande->id) }}">
                    @csrf
                    @method('PUT')

                   
                    <div>
                        <x-label for="name" :value="__('Name')" />
                        <input type="text" id="name" class="block mt-1 w-full" name="name"
                            value="{{ $demande->demandeur->nom }}">

                    </div>


                    <div>
                        <x-label for="prenom" :value="__('Prenom')" />
                        <input type="text" id="prenom" class="block mt-1 w-full" name="prenom"
                            value="{{ $demande->demandeur->prenom }}">

                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-button class="ml-4">
                            {{ __('Valider') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</x-admin-layout>
