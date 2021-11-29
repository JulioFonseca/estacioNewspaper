<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use App\Models\Assunto;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    private $objMaterias;
    private $objAssunto;

    public function __construct()
    {
        $this->objMaterias= new materias();
        $this->objAssunto= new assunto();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materia = $this-> objMaterias->all();
        $assunto = $this-> objAssunto->all();
        return view(view: 'newspaper',data: compact('materia', 'assunto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assuntos = $this->objAssunto->all();
        return view(view: 'create', data: compact(var_name: 'assuntos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objMaterias->create([
            'titulo'=>$request->titulo,
            'materia'=>$request->descricao,
            'assunto_id'=>$request->assuntos_id
        ]);
        if($cad){
            return redirect(to: '/materias');
        }
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $materia = $this->objMaterias->find($id);
        return view(view: 'show',data: compact(var_name: 'materia'));
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $materia = $this->objMaterias->find($id);
        $assuntos = $this->objAssunto->all();
        return view(view: 'create', data: compact('materia', 'assuntos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objMaterias->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'materia'=>$request->descricao,
            'assunto_id'=>$request->assuntos_id
        ]);
        return redirect(to:'materias');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $materia = $this->objMaterias->findOrFail($id);
        $materia->delete();

        return redirect(to:'materias');
    }


    public function filter($id)
    {
        $materia = $this->objMaterias->where(['assunto_id'=> $id])->get();
        $assunto = $this->objAssunto->all();
        return view(view: 'filter',data: compact('materia', 'assunto'));
    }
}
