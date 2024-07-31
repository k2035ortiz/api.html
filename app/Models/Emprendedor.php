<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendedor extends Model
{
    use HasFactory;
    public function Inversionistas()
    {
        return $this->belongsToMany(Inversionista::class);
    }

    public function publicar_emprendimiento (){
        return $this->belongsTo(publicar_emprendimiento::class);
    }
}
