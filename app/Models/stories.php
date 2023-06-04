<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\destination;

class Stories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'konten',
        'img',
        'destination_id'
    ];

    public function destination():BelongsTo 
    {
        return $this->belongsTo(destination::class);
    }
}
