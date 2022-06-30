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


}
