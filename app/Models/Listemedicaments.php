<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listemedicaments extends Model
{
    use HasFactory;

protected $table='listemedicaments';
public  $timestamps=true;

protected $casts = [
    'created_at' => 'datetime:d/m/Y', // Change your format
    'updated_at' => 'datetime:d/m/Y',
];

protected $fillable = [
  
    'nomclient',
    'image',
    
    'created_at'
 
];



}
