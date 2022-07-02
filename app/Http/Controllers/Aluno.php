<?php

namespace App\Http\Controllers;

use App\Models\Aluno as ModelsAluno;
use App\Models\AlunoDisciplina;
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

    public function mostraPerfil($id)
    {
        $alunoDisciplinaModel = new AlunoDisciplina();
        $data['disciplinas'] = $alunoDisciplinaModel->disciplinasAlunoMatriculado($id);

        $alunoModel = new ModelsAluno;
        $data['aluno'] = $alunoModel->getById($id);
        return view('aluno/perfil', $data);
    }

    public function mostraEditarFrequenciaMedia($idAluno, $idDisciplina)
    {
        $alunoModel = new ModelsAluno;
        $data['dados'] = $alunoModel->getFrequenciaMedia($idAluno, $idDisciplina);
        return view('aluno/editarFrequenciaMedia', $data);
    }

    public function editarFrequenciaMedia(Request $request)
    {
        AlunoDisciplina::where('id', $request->id)->update(['media' => $request->media]);
        AlunoDisciplina::where('id', $request->id)->update(['frequencia' => $request->frequencia]);
        return redirect('/disciplina/perfil/'. $request->idDisciplina);
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
