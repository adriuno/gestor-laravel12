<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entrada extends Model
{
    use HasFactory;

    protected $fillable  = ['titulo', 'imagen', 'contenido', 'tag', 'user_id'];


    // una entrada tiene varios comentarios
    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    // una entrada pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'user:id');
    }
}
