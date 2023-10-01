<?php

namespace App\Models;

use App\Models\Expediente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Folder extends Model
{
    use HasFactory;

    protected $fillable  = ['codigo','name', 'alias', 'direcao_id'];

    public function direcao()
    {
        return $this->belongsTo(Direcao::class);
    }
    public function expedientes()
    {
        return $this->hasMany(Expediente::class);
    }
}
