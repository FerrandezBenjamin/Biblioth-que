<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empreints extends Model
{
    protected $fillable =[
        'id_users', 'id_books', 'date_retour', 'rented_at', 'due_at', 'created_at', 'updated_at',
    ];
}
