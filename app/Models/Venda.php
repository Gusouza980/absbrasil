<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    public function carrinho(){
        return $this->belongsTo(Carrinho::class);
    }

    public function boleto(){
        return $this->hasOne(PagamentoBoleto::class);
    }

    public function carne(){
        return $this->hasOne(PagamentoCarne::class);
    }

    public function cartao(){
        return $this->hasOne(PagamentoCartao::class);
    }

    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
