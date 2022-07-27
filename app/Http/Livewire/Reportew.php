<?php

namespace App\Http\Livewire;
use App\Models\EquipoModel;
use App\Models\JugadorModel;
use App\Models\PresidenteModel;
use Livewire\Component;
use PDF;
use Illuminate\Support\Facades\DB;

class Reportew extends Component
{
    protected $queryString = ['buscar'];
    public $buscar, $nomequipo;

    public function render()
    {
        return view('livewire.reportew');
    }

    public function Equipo()
    {
       
        $e=DB::table('equipo')
        ->join('presidente','equipo.id_presidente','=','presidente.id')
        ->select('equipo.*','presidente.nom_p as nomp','presidente.ape_p as apep')
        ->get();
         return PDF::loadView('livewire.equipo', compact('e'))
        ->stream('archivo.pdf');
    } 

    public function Jugador($buscar)
    {
        $j=DB::table('jugador')
        ->join('equipo','jugador.id_equipo','=','equipo.id')
        ->select('jugador.*','equipo.nom_e as nomp')
        -> where( 'jugador.cedula_j',$buscar )->get();
        return PDF::loadView('livewire.jugador', compact('j'))
        ->stream('archivo.pdf');
    }

    public function Jugadores($nomequipo)
    {
        $je=DB::table('jugador')
        ->join('equipo','jugador.id_equipo','=','equipo.id')
        ->select('jugador.*','equipo.nom_e as nomp')
        -> where( 'equipo.nom_e', $nomequipo )->get();
        return PDF::loadView('livewire.presidente', compact('je'))
        ->stream('archivo.pdf');
    }
}
