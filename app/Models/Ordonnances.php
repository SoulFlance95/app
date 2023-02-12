<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Ordonnances extends Model
{
    use HasFactory;
    protected $table = 'ordonnances';
    public $timestamps = true;

    protected $casts = [
        'created_at' => 'datetime:d/m/Y', // Change your format
        'updated_at' => 'datetime:d/m/Y',
    ];


    protected $fillable = [
        'libellé',
        'created_at',
        'prix',
     
        'nommedicament',
        'stock'

        
   ];


    
}
