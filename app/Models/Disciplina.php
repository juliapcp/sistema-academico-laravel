<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'idProfessor',
        'cargaHoraria',
    ];

    protected $table = 'disciplina';

    public function insere($data)
    {
        $this->save($data);
        return $this->id;
    }

    public function getById($id)
    {
        $builder = Disciplina::where('id', '=', $id);
        return $builder->first();
    }

    public function todasDisciplinas()
    {
        $builder = Disciplina::join('professor', 'professor.id', '=', 'disciplina.idProfessor');
        $builder->select('*', 'disciplina.id as idDisciplina', 'disciplina.nome as nomeDisciplina', 'professor.nome as nomeProfessor', 'cargaHoraria');
        return $builder->get();
    }

    public function alunosMatriculados($id)
    {
        $builder = Disciplina::join('alunodisciplina', 'disciplina.id', '=', 'alunodisciplina.idDisciplina');
        $builder->join('aluno', 'aluno.id', '=', 'alunodisciplina.idAluno');
        $builder->where('disciplina.id', '=', $id);
        $builder->select(\DB::raw("aluno.nome as nomeAluno, idAluno, frequencia, media, (case when frequencia < 75 then 'RF' else (case when media < 7 then 'R'	else 'A' end) end) as situacao"));
        $builder->orderby("media", "desc");
        return $builder->get();
    }
}
