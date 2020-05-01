<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Http\Resources\Empresa as EmpresaResource;
use App\Http\Resources\EmpresaCollection;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        return new EmpresaCollection(Empresa::all());
    }

    public function show($id)
    {
        return new EmpresaResource(Player::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([

            'cargo' => 'accepted',
            'email' => 'email',
            'token' => 'token',
            'status' => 'status',






        ]);

        $empresa = Empresa::create($request->all());

        return (new EmpresaResource($empresa))
                ->response()
                ->setStatusCode(201);
    }

    public function answer($id, Request $request)
    {
        $request->merge(['correct' => (bool) json_decode($request->get('correct'))]);
        $request->validate([
            'correct' => 'required|boolean'
        ]);

        $empresa = Empresa::findOrFail($id);
        $empresa->answers++;
        $empresa->points = ($request->get('correct')
                           ? $empresa->points + 1
                           : $empresa->points - 1);
        $empresa->save();

        return new EmpresaResource($empresa);
    }

    public function delete($id)
    {

        try {
            $empresa = Empresa::findOrFail($id);
            //dd($empresa);

            $empresa->delete();
            return response()->json("Deletado com Sucesso!", 200);
        } catch (ModelNotFoundException $e) {
            //dd($e);
            //$empresa->delete();
            return response()->json("Erro ao Deletar!", 400);
        }
    }

    public function resetAnswers($id)
    {
        $player = Player::findOrFail($id);
        $player->answers = 0;
        $player->points = 0;

        return new PlayerResource($player);
    }
}
