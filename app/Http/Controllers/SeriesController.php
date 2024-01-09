<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller{
    public function index(){
        $series = Serie::orderBy('nome')->get();
        return view('series.index')->with('series', $series);
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        if($request->hasFile('capa')){
            $path = $request->file('capa')->store('capas', 'public');

            $serie = new Serie();
            $serie->nome = $request->input('nome');
            $serie->descricao = $request->input('descricao');
            $serie->episodios = $request->input('episodios');
            $serie->genero = $request->input('genero');
            $serie->avaliacao = $request->input('avaliacao');
            $serie->capa = $path;

            $serie->save();
            return redirect('/');
        }

        return response()->json(['error' => 'Imagem da capa não encontrada.'], 400);
    }

    public function searchSeries(Request $request){
        $search = $request->input('search');
        $series = Serie::where('nome', 'like', "%$search$")->get();
        return view('series.index')->with('series', $series);
    }
}