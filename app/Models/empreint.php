<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empreint extends Model
{
    protected $fillable =[
        'id_users', 'id_books', 'rented_at', 'due_at',
    ];
}
