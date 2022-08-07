<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    use HasFactory;
    protected $table='projets';
    protected $primaryKey='id';
    protected $fillable = ['title' , 'description' , 'image'];  
}  
