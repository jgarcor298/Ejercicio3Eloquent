<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pintor;
use App\Models\Pintura;

class PinturaController extends Controller
{
    public function add()
    {
        $pintor = Pintor::find(2);

        $pintura = new Pintura;

        $pintura->titulo = 'Las meninas';
        $pintura->descripcion = 'Muy popular y de grandes dimensiones';
        $pintura->pintor_id = $pintor->id;
        $pintura->imagen = 'img/Las_meninas.jpg';

        $pintura->save();


        $pintura = new Pintura;

        $pintura->titulo = 'Vieja friendo huevos';
        $pintura->descripcion = 'Pintado en Sevilla en 1618.';
        $pintura->pintor_id = $pintor->id;
        $pintura->imagen = 'img/Vieja_friendo_huevos.jpg';

        $pintura->save();
    }

    public function present()
    {
        $pinturas = Pintura::all();

        return $pinturas;
    }

    public function galeria() {
        $pinturas = Pintura::all();

        return view('galeria', compact('pinturas'));
    }
}
