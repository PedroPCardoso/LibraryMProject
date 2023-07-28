<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;
    CONST STATUS_EMPRESTADO = 1;
    CONST STATUS_ATRASADO = 2;
    CONST STATUS_FINALIZADO = 3;

    CONST PRAZO_LIMITE_EM_DIAS = 7;

    protected $fillable = [
            'user_id',
            'livro_id',
            'data_inicio',
            'data_fim',
            'data_da_devolucao',
            'status',
        ];

    public function user()
    {
        return $this->morphMany(User::class, 'user_id');
    }
    public function livro()
    {
        return $this->morphMany(Livro::class, 'livro_id');
    }
}
