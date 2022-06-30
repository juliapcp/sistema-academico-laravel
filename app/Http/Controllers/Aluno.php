<?php

namespace App\Http\Controllers;

use App\Models\Aluno as ModelsAluno;
use Illuminate\Http\Request;

class Aluno extends Controller
{
    public function listagem()
    {
        $alunoModel = new ModelsAluno;
        $data['alunos'] = $alunoModel->get();
        return view('aluno/listagem', $data);
    }

    public function mostraInserir()
    {
        return view('aluno/inserir');
    }

    public function inserir(Request $request)
    {
        $alunoModel = new ModelsAluno;
        $alunoModel->nome = $request->nome;
        $alunoModel->matricula = $request->matricula;
        $alunoModel->email = $request->email;

        $data[] = $alunoModel;
        $alunoModel->insere($data);
        return redirect('/aluno');
    }
}
