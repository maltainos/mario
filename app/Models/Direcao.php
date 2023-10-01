<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Direcao extends Model
{
    use HasFactory;

    protected $table = "direcoes";
    protected $fillable = [ 'name','alias' ];

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }
}
