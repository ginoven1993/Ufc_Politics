<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenements extends Model
{
    use HasFactory;
    protected $table = 'evenements';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titre',
        'photo',
        'video',
        'date',
        'description',
        'heure',
        'lieu'
    ];
}
