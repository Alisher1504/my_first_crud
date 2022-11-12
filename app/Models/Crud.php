<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;

    protected $table = 'cruds';

    protected $fillable = [
        'lastname',
        'firstname',
        'age',
        'hobiy',
        'description',
        'email',
        'number',
        'degree',
        'staj',
        'courses',
        'address',
        'work',
        'message',
        'telegramlink',
    ];

}
