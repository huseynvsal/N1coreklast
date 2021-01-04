<?php

namespace App\Messages;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';
    protected $fillable = ['name','email','phone','message','image'];
}
