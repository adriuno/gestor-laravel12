<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comentario extends Model
{
    protected $fillable = ['contenido', 'entrada_id', 'user_id'];

    // un coment. pertenece a una entrada
    public function entrada(): BelongsTo
    {
        return $this->belongsTo(Entrada::class, 'entrada_id');
    }

    // un com. pertence a un user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
