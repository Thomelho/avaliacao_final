<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Associacao;
use App\Models\Capital;
class AssociacaoCapital extends Model
{
    use HasFactory;
    protected $table = "associacao_capitais";
}
