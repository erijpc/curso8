<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacaoAtos;
use App\Models\Atos;
use Illuminate\Http\Request;

class AtosController extends Controller
{
    public function index() {

        $atos = Atos::latest('id')->paginate();

       // dd($atos);

        return view('admin.atos.index', compact('atos'));
    }

    public function novo () {
        return view('admin.atos.novo');
    }

    public function insert (ValidacaoAtos $request) {
        //dd($request->ato);

        Atos::create($request->all());

        return redirect()
            ->route('atos.index')
            ->with('criado', 'Ato Salvo com Sucesso!!!');

//        $atos = Atos::get();
  //      return view('admin.atos.index', compact('atos'));
    }

    public function show ($id) {

        //$atos = Atos::where('id', $id)->first();
        if (!$atos = Atos::find($id)) {
            return redirect()->route('atos.index');
        }
        //dd($atos);

        return view('admin.atos.show', compact('atos'));
    }

    public function edit ($id) {

        //$atos = Atos::where('id', $id)->first();
        if (!$atos = Atos::find($id)) {
            return redirect()->route('atos.index');
        }
        //dd($atos);

        return view('admin.atos.edit', compact('atos'));
    }

    public function update (ValidacaoAtos $request, $id) {

        //$atos = Atos::where('id', $id)->first();
        if (!$atos = Atos::find($id)) {
            return redirect()->route('atos.index');
        }
//        dd("atualizando registro...{$id}");
        $atos->update($request->all());
//        return view('admin.atos.edit', compact('atos'));
        return redirect()
            ->route('atos.index')
            ->with('criado', 'Ato Editado com sucesso.');
    }

    public function search (Request $request) {
        //dd ("resultado da pesquisa [{$request->filtro}]");

        $filters = $request->except('_token');

        $atos = Atos::where('ato', 'LIKE', "%{$request->filtro}%")
                            //->toSQL();
                            ->paginate();
                           // dd($atos);

        return view('admin.atos.index', compact('atos', 'filters'));
    }

    public function cnpj() {
        return view('admin.atos.cnpj');
    }

    public function navbar() {
        return view('admin.navbar');
    }
}
