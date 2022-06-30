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


}
