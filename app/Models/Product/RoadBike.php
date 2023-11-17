<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadBike extends Model
{
    protected $table = 'roadbikes';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
