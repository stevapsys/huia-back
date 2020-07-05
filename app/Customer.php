<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [ 'id', 'name', 'address', 'created_at', 'updated_at'
];
}
