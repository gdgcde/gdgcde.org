<?php

namespace App\Http\Controllers;

use App\Inscripciones;
use Illuminate\Http\Request;

class SiteController extends Controller
{


    public function registro(Request $request){


        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' =>  'required|unique:inscripciones|max:255',
            'phone' => 'required|max:255',
            'empresa' => 'required|max:255',
        ]);

        $data = new Inscripciones();
        $data->fill($request->all());

        if($data->save()){
            session()->flash('success', 'Gracias por registrarte, te esperamos');

        } else {
            session()->flash('warning', 'UPS!!, Algo salió mal al realizar tu registro, por favor intenta de nuevo');
        }

        return redirect()->back();

    }

}
