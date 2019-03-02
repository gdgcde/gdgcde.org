<?php

namespace App\Http\Controllers;

use App\Inscripciones;
use Illuminate\Http\Request;

class RegistradosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $route = 'slider';
    private $module = 'Registrados';
    private $pag = 25;
    private $folder = 'registrados';

    public function index(Request $request)
    {


        $title = $this->module;
        $data = Inscripciones::orderBy('name')->paginate($this->pag);
        $ruta = $this->route;

        return view($this->folder.'.index', compact('title', 'data', 'ruta', 'request'));
    }


    public function create()
    {

        $title = $this->module;
        $ruta = $this->route;

        return view($this->folder.'.create', compact('title', 'ruta', 'request'));
    }


    public function store(Request $request)
    {


        $data =  new Inscripciones();
        $rescatado = $request->all();
        $data->fill($rescatado);
        if($data->save()){
            session()->flash('success', 'Se ha creado correctamente');
        }else {
            session()->flash('danger', 'OPS!!, Algo salio mal, no se pudo guardar el registro');
        }

        return redirect($this->route);
    }


    public function show($id)
    {
        $title = $this->module .' Eliminar';
        $ruta = $this->route;
        $data = Slider::Find($id);
        return view($this->folder.".show", compact('data', 'title', 'modulo', 'ruta'));
    }


    public function edit($id)
    {
        $title = $this->module;
        $data = Slider::Find($id);
        $ruta = $this->route;

        return view($this->folder.'.edit', compact('title', 'data', 'ruta', 'request'));
    }


    public function update(Request $request, $id)
    {
        $data = Slider::FindOrFail($id);
        $rescatado = $request->all();
        if($request->image != ''){
            $rescatado['image'] = $this->upload_image($request->image, 'slider');
        }
        if($request->image != ''){
            $rescatado['image_mobile'] = $this->upload_image($request->image_mobile, 'slider_mobile');
        }


        $data->fill($rescatado);

        if($data->save()){

            session()->flash('success', 'Se ha actualizado correctamente');
        }else {
            session()->flash('danger', 'OPS!!, Algo salio mal, no se pudo actualizar  el registro');
        }

        return redirect($this->route);
    }


    public function destroy($id)
    {
        $data = Slider::Find($id);
        $data->delete();
        session()->flash('success', 'Se ha eliminado correctamente');
        return redirect($this->route);
    }



    public function api_slider(){

        return Slider::where('active', 1)->get();
    }



    function upload_image($file=array(),  $folder){


        $file_type = $file->getClientOriginalExtension();
        $folder = $folder;
        $destinationPath = public_path() . '/uploads/'.$folder;
        $destinationPathThumb = public_path() . '/uploads/'.$folder.'thumb';
        $filename = time().'_'.time() . '.' . $file->getClientOriginalExtension();
        $url = '/uploads/'.$folder.'/'.$filename;

        if ($file->move($destinationPath.'/' , $filename)) {

            return $url;

        }


        return '';

    }



}
