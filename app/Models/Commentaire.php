<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'auteur',
        'contenu',

    ];
    public function idee(): BelongsTo
    {
       return $this->belongsTo(idee::class);
    }
}
