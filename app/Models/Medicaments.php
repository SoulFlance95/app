<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicaments extends Model
{
    use HasFactory;

    protected $table = 'medicaments';
    public $timestamps = true;

    protected $casts = [
        'created_at' => 'datetime:d/m/Y', // Change your format
        'updated_at' => 'datetime:d/m/Y',
    ];


    protected $fillable = [
       
        'nommedicament',
        'nomlaboratoire',
        'description',
        'created_at',
        'updated_at',
        'dosage',
        'stocks',
        'prix',
        'image'

        
        

        
    ];
}

