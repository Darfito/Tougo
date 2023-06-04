<?php

namespace App\Models;

use App\Models\Stories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'province',
        
    ];

    public function stories(): HasMany{
        return $this->hasMany(Stories::class);
    }
}
