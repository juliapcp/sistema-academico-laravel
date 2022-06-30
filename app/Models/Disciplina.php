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

    public function todasDisciplinas()
    {
        $builder = Disciplina::join('professor', 'professor.id', '=', 'disciplina.idProfessor');
        $builder->select('*', 'disciplina.id as idDisciplina', 'disciplina.nome as nomeDisciplina', 'professor.nome as nomeProfessor', 'cargaHoraria');
        return $builder->get();
    }
}
