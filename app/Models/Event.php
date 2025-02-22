<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Permitir atribuição em massa para os campos especificados
    protected $fillable = [
        'name', 'date', 'location', 'description'
    ];
}