<?php

namespace App\Http\Controllers;

use App\Models\Assunto;
use Illuminate\Http\Request;

class AssuntoController extends Controller
{

    private $objAssunto;

    public function __construct()
    {
        $this->objAssunto= new assunto();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assunto = $this-> objAssunto->all();
        return view(view: 'assunto',data: compact('assunto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(view: 'assuntocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objAssunto->create([
            'nome'=>$request->nome
        ]);
        if($cad){
            return redirect(to: '/assuntos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assunto  $assunto
     * @return \Illuminate\Http\Response
     */
    public function show(Assunto $assunto)
    {
        //
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $assunto = $this->objAssunto->find($id);
        return view(view: 'assuntocreate', data: compact('assunto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assunto  $assunto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objAssunto->where(['id'=>$id])->update([
            'nome'=>$request->nome,
        ]);
        return redirect(to:'assuntos');
    }

     /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $assunto = $this->objAssunto->findOrFail($id);
        $assunto->delete();

        return redirect(to:'assuntos');
    }
}
