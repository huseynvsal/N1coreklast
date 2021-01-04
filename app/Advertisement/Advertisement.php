<?php

namespace App\Advertisement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = 'advertisment';
    protected $fillable = ['name' , 'image' , 'about' , 'content'];
}
