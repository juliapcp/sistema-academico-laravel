<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoDisciplina extends Model
{
    protected $fillable = [
        'id',
        'idAluno',
        'idDisciplina',
        'media',
        'frequencia'
    ];

    protected $table = 'alunodisciplina';

    public function insere($data)
    {
        return $this->save($data);
    }

    public function disciplinasAlunoMatriculado($idAluno)
    {
        $builder = AlunoDisciplina::join('disciplina', 'disciplina.id', '=', 'alunodisciplina.idDisciplina');
        $builder->join('professor', 'disciplina.idProfessor', '=', 'professor.id');
        $builder->where('idAluno', '=', $idAluno);
        $builder->select("idDisciplina",'disciplina.nome as nomeDisciplina', "professor.nome as nomeProfessor", "cargaHoraria", "frequencia", "media", (\DB::raw("(case when frequencia < 75 then 'RF' else (case when media < 7 then 'R'	else 'A' end) end) as situacao")));
        return $builder->get();
    }

}
