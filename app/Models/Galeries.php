<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeries extends Model
{
    use HasFactory;

    protected $table = 'galeries';

    protected $primaryKey = 'id';

    protected $fillable = [
        'photo',
        'video',
        'description'
    ];
}
