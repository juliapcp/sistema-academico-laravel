<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'matricula',
        'email'
    ];

    protected $table = 'aluno';

    public function insere($data)
    {
        return $this->save($data);
    }

    public function getById($id)
    {
        $builder = Aluno::where('id', '=', $id);
        return $builder->first();
    }
    public function getFrequenciaMedia($idAluno, $idDisciplina){
        $builder = AlunoDisciplina::join('disciplina', 'disciplina.id', '=', 'alunodisciplina.idDisciplina');
        $builder->where('idAluno', '=', $idAluno);
        $builder->where("idDisciplina", "=", $idDisciplina);
        $builder->join('aluno', 'aluno.id', '=', 'alunodisciplina.idAluno');
        $builder->select("idDisciplina", "alunodisciplina.id as idRelacao", "idAluno","aluno.nome as nomeAluno", 'disciplina.nome as nomeDisciplina', "frequencia", "media");
        return $builder->first();
    }
}
