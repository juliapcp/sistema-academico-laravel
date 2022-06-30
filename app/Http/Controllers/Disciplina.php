<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\AlunoDisciplina;
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
        $alunoModel = new Aluno;
        $data['alunos'] = $alunoModel->get();
        return view('disciplina/inserir', $data);
    }

    public function inserir(Request $request)
    {
        $disciplinaModel = new ModelsDisciplina;
        $disciplinaModel->nome = $request->nome;
        $disciplinaModel->cargaHoraria = $request->cargaHoraria;
        $disciplinaModel->idProfessor = $request->idProfessor;

        $data[] = $disciplinaModel;
        $id = $disciplinaModel->insere($data);

        foreach ($request->alunos as $aluno) {
            $disciplinaAlunoModel = new AlunoDisciplina;
            $disciplinaAlunoModel->idAluno = $aluno;
            $disciplinaAlunoModel->idDisciplina = $id;
            $disciplinaAlunoModel->frequencia = 0;
            $disciplinaAlunoModel->media = 0;
            $data[] = $disciplinaAlunoModel;

            $disciplinaAlunoModel->insere($data);
        }
        return redirect('/disciplina');
    }
}
