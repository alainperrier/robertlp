<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    const UPDATED_AT = null;
    
    protected $fillable = [
 		'email',
    ];
}
