<?php

namespace App\Http\Controllers\Carro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carro;

class CarroCrudController extends Controller
{

    private $carro;

    public function __construct(Carro $carro) {
        $this->carro = $carro;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = $this->carro->all();

        return view("Carro.index", compact('registro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Carro.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'price' => 'required',
            'ano' => 'required'
        ]);

        $registro = $request->only(['modelo', 'price', 'ano']);

        if($this->carro->create($registro)){
            return redirect()->route('carro.index');
        }else{
            return "erro";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = $this->carro->where('id', $id)->first();

        return view('carro.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = $this->carro->where('id', $id)->first();

        return view('carro.editar', compact('registro'));
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
        $request->validate([
            'modelo' => 'required',
            'price' => 'required',
            'ano' => 'required'
        ]);

        $registro = $request->only(['modelo', 'price', 'ano']);

        if($this->carro->where('id', $id)->first()->update($registro)){
            return redirect()->route('carro.index');
        }else{
            return "erro";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->carro->where('id', $id)->first()->delete()){
            return redirect()->route('carro.index');
        }else{
            return "erro";
        }
    }
}
