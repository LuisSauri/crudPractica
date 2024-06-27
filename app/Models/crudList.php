<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crudList extends Model
{
    use HasFactory;

    protected $table = 'crud_list';

    protected $fillable = [
        'nombre',
        'apellido',
        'compañia',
        'ciudad',
        'pais',
        'telefono1',
        'telefono2',
        'email',
        'website',
    ];
}