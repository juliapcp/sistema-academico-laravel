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
}
