@extends('layouts.app')

@section('title', 'Bulletin')

@section('content')
    <div class="">
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-24 mx-auto" />
            </a>
            <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
                BULLETIN QUALITE de la PRODUCTION INFORMATIQUE
            </h2>
            <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
                <span class="uppercase">{{ $report -> bank -> name }}</span> en DCO du {{ date('d/m/Y', strtotime($report -> date)) }}
            </h2>
        </div>

        <div class="max-w-xs mx-auto mt-8 sm:w-full md:max-w-4xl">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 mt-6 align-middle sm:px-6 lg:px-8">
                            <table class="table-auto border border-black">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border border-black">CATEGORIES</th>
                                        <th scope="col" class="border border-black">Heure et/ou Etat</th>
                                        <th scope="col" class="border border-black">Norme clientèle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col" class="border border-black">Travaux du TFJO</th>
                                        <td class="border border-black"></td>
                                        <td class="border border-black"></td>
                                    </tr>
                            
                                    <tr>
                                        <td class="border border-black">
                                            Début sauvegarde avant TFJ
                                        </td>
                                        <td class="border border-black text-center">
                                            {{ $report -> pre_tfj() -> where('tache', 'Sauvegarde RMAN') -> first() -> debut}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                            
                                    <tr>
                                        <td class="border border-black">Début TFJ</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> synthesis -> debut}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">Fin TFJ</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> synthesis -> fin}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">Durée TFJ</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> synthesis -> duree}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">Fin sauvegarde après TFJ</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> post_tfj() -> where('tache', 'Sauvegarde RMAN') -> first() -> fin}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">Ouverture du site et portail</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> post_tfj() -> where('tache', 'Ouverture du Site') -> first() -> fin}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">Disponibilité Infocentre</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> post_tfj() -> where('tache', 'Disponibilité Infocentre') -> first() -> fin}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">Transfert des fichiers aux agences (SDA, états TFJO)</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> synthesis -> transfert_sda}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">Contrôle disponibilité AMPLITUDE</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> post_tfj() -> where('tache', 'Disponibilité Amplitude') -> first() -> fin}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="col" class="border border-black">Monétique</th>
                                        <td class="border border-black"></td>
                                        <td class="border border-black"></td>
                                    </tr>

                                    <tr>
                                        <td class="border border-black">
                                            Solde monétique avant TFJ
                                        </td>
                                        <td class="border border-black text-center">
                                            {{ $report -> pre_tfj() -> where('tache', 'Solde Monétique') -> first() -> fin}}
                                        </td>
                                        <td class="border border-black text-center font-bold">Avant TFJ</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">
                                            Solde monétique après TFJ
                                        </td>
                                        <td class="border border-black text-center">
                                            {{ $report -> post_tfj() -> where('tache', 'Solde Monétique') -> first() -> fin}}
                                        </td>
                                        <td class="border border-black text-center font-bold">Après TFJ</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">
                                            Disponibilité du résident 
                                        </td>
                                        <td class="border border-black text-center">
                                            RAS
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                            
                                    <tr>
                                        <th scope="col" class="border border-black">Services à valeur ajouté</th>
                                        <td class="border border-black"></td>
                                        <td class="border border-black"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">
                                            Transfert SMS
                                        </td>
                                        <td class="border border-black text-center">
                                            
                                        </td>
                                        <td class="border border-black text-center font-bold"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">
                                            Disponibilité du service STREAMSERVE 
                                        </td>
                                        <td class="border border-black text-center">
                                            RAS
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">
                                            Disponibilité du service SWIFT 
                                        </td>
                                        <td class="border border-black text-center">
                                            RAS
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                            
                                    <tr>
                                        <th scope="col" class="border border-black">Disponibilité du SI</th>
                                        <td class="border border-black"></td>
                                        <td class="border border-black"></td>
                                    </tr>
                            
                                    <tr>
                                        <td colspan="3" class="border text-center border-black">Amplitude</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">
                                            Taux disponibilité de la journée
                                        </td>
                                        <td class="border border-black text-center">
                                            100%
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">
                                            Taux disponibilité du mois
                                        </td>
                                        <td class="border border-black text-center">
                                            100%
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border border-black">
                                            Taux disponibilité sur l'année
                                        </td>
                                        <td class="border border-black text-center">
                                            100%
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                            
                                    <tr>
                                        <th scope="col" class="border border-black">Volumétrie</th>
                                        <td class="border border-black"></td>
                                        <td class="border border-black"></td>
                                    </tr>
                            
                                    <tr>
                                        <td class="border border-black">Nombre d'évènements</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> synthesis -> evenements}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                            
                                    <tr>
                                        <td class="border border-black">Nombre de mouvements</td>
                                        <td class="border border-black text-center">
                                            {{ $report -> synthesis -> mouvements}}
                                        </td>
                                        <td class="border border-black text-center"></td>
                                    </tr>
                            
                                    <tr>
                                        <td colspan="3" class="border text-center font-bold border-black">Incident de production</td>
                                    </tr>
                            
                                    <tr>
                                        <td colspan="3" class="border font-bold border-black">RAS</td>
                                    </tr>
                            
                                    <tr>
                                        <td colspan="3" class="border text-center font-bold border-black">Autres Infos Traitements</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
