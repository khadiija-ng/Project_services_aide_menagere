<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'name', 
        'phone',
        'email',
        'adresse',
        'frequence',
    ];
}