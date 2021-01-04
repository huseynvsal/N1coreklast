<?php

namespace App\Products;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','ingredient','weight','protein','fat','energy','value','life','condition','image1','image2','image3','image4'];
}
