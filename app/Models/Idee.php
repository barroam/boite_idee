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
    ];
    /**
     * Get the user that owns the Idee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorie(): BelongsTo
    {
                return $this->belongsTo(Categorie::class);
    }
    public function user(): BelongsTo
    {
                return $this->belongsTo(User::class);
    }

}
