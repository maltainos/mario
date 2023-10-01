<?php

namespace App\Models;

use App\Models\Folder;
use App\Models\Tracer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expediente extends Model
{
    use HasFactory;
    protected $fillable = [
        'tracer_code',
        'code',
        'last_name',
        'first_name',
        'course',
        'period',
        'email',
        'phone',
        'name',
        'file',
        'notes',
        'status',
        'aproveted_at',
        'progress',
        'folder_id'
    ];
    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    public function tracer()
    {
        return $this->belongsTo(Tracer::class);
    }

}
