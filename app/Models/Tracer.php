<?php

namespace App\Models;

use App\Models\Expediente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tracer extends Model
{
    use HasFactory;
    protected $fillable  = ['from','to', 'subject', 'notes','file', 'expediente_id'];
    public function expedientes()
    {
        return $this->hasMany(Expediente::class);
    }
}
