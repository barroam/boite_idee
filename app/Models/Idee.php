<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Idee extends Model
{
    use HasFactory;

    protected $fillable = [
        'auteur',
        'libelle',
        'description',
        'status',
        'date_creation',
        'categorie_id',
        'user_id',
    ];
   
    public function categories(): BelongsTo
    {
                return $this->belongsTo(Categorie::class);
    }
    public function user(): BelongsTo
    {
                return $this->belongsTo(User::class);
    }

}
