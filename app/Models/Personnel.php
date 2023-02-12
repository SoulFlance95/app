<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Personnel extends Model
{
    use HasFactory;
  
    protected $table = 'personnel';
    public $timestamps = true;

  

    protected $casts = [
        'created_at' => 'datetime:d/m/Y', // Change your format
        'updated_at' => 'datetime:d/m/Y',
    ];





    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'fonction',
        'salaire',
        'image'
    ];

   
}
