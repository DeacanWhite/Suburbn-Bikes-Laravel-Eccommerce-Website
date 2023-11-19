<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @method static \Illuminate\Database\Eloquent\Builder|Product where(string $column, mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIn(string $column, mixed $values)
 */
class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'prodNo';
    public $timestamps = false;
}
