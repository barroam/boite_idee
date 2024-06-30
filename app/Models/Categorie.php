<?php

namespace App\Models;

use App\Models\Idee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
    ];
    public function idee(): HasManyThrough
    {
        return $this->hasManyThrough(Idee::class);
    }
    

}
