<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'email',
    ];

    protected $table = 'professor';

    public function insere($data)
    {
        return $this->save($data);
    }

    public function getById($id)
    {
        $builder = Professor::where('id', '=', $id);
        return $builder->first();
    }

    public function disciplinasProfessorMinistra($idProfessor)
    {
        $builder = Professor::join('disciplina', 'disciplina.idProfessor', '=', 'professor.id');
        $builder->where('professor.id', '=', $idProfessor);
        $builder->select('disciplina.nome as nomeDisciplina', "professor.nome as nomeProfessor", "cargaHoraria", "disciplina.id as idDisciplina");
        return $builder->get();
    }

    public function alunosEmSuasDisciplinas($idProfessor)
    {
        $builder = Professor::join('disciplina', 'disciplina.idProfessor', '=', 'professor.id');
        $builder->join('alunodisciplina', 'disciplina.id', '=', 'alunodisciplina.idDisciplina');
        $builder->join('aluno', 'aluno.id', '=', 'alunodisciplina.idAluno');
        $builder->where('professor.id', '=', $idProfessor);
        $builder->select(\DB::raw("distinct aluno.nome as nomeAluno, idAluno"));
        return $builder->get();
    }

}
