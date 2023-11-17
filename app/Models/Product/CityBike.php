<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class CityBike extends Model
{
    protected $table = 'citybikes';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
