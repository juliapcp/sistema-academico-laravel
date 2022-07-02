<?php

namespace App\Http\Controllers;

use App\Models\Professor as ModelsProfessor;
use Illuminate\Http\Request;

class Professor extends Controller
{
    public function listagem()
    {
        $professorModel = new ModelsProfessor;
        $data['professors'] = $professorModel->get();
        return view('professor/listagem', $data);
    }

    public function mostraInserir()
    {
        return view('professor/inserir');
    }

    public function inserir(Request $request)
    {
        $professorModel = new ModelsProfessor;
        $professorModel->nome = $request->nome;
        $professorModel->email = $request->email;

        $data[] = $professorModel;
        $professorModel->insere($data);
        return redirect('/professor');
    }
    public function mostraPerfil($id)
    {
        $professorModel = new ModelsProfessor;
        $data['disciplinas'] = $professorModel->disciplinasProfessorMinistra($id);
        $data['alunos'] = $professorModel->alunosEmSuasDisciplinas($id);
        $data['professor'] = $professorModel->getById($id);
        return view('professor/perfil', $data);
    }
}
