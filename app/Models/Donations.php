<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    protected $table = 'donations';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nom',
        'prenoms',
        'type_payement',
        'montant',
        'status'
    ];
}
