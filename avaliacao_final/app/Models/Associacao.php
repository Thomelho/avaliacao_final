<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estado;
use App\Models\Capital;
use Illuminate\Support\Facades\DB;

class Associacao extends Model
{
    use HasFactory;

    public function estado()
    {
        return $this->hasOne(Estado::class, 'id', 'estado_id');
    }

    public function items()
    {
        return $this->belongsToMany(Capital::class, 'associacao_capital')->withPivot('quantidade', 'created_at');
    }

    public function associacaoTotal()
    {
        return $this->items->sum(function ($item) {
            return $item->pivot->quantidade * $item->regiao;
        });
    }
}
