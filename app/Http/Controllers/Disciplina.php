<?php

namespace App\Http\Controllers;

use App\Models\Disciplina as ModelsDisciplina;
use App\Models\Professor;
use Illuminate\Http\Request;

class Disciplina extends Controller
{
    public function listagem()
    {
        $disciplinaModel = new ModelsDisciplina;
        $data['disciplinas'] = $disciplinaModel->todasDisciplinas();
        return view('disciplina/listagem', $data);
    }

    public function mostraInserir()
    {
        $professorModel = new Professor;
        $data['professores'] = $professorModel->get();
        return view('disciplina/inserir', $data);
    }

    public function inserir(Request $request)
    {
        $disciplinaModel = new ModelsDisciplina;
        $disciplinaModel->nome = $request->nome;
        $disciplinaModel->cargaHoraria = $request->cargaHoraria;
        $disciplinaModel->idProfessor = $request->idProfessor;

        $data[] = $disciplinaModel;
        $disciplinaModel->insere($data);
    }
}
    