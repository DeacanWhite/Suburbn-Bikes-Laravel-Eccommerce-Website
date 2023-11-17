<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @method static \Illuminate\Database\Eloquent\Builder|service where(string $column, mixed $value)
 */
class service extends Model
{
    use HasFactory;
    protected $table = 'serviceBooking';
//    protected $primaryKey = 'id';
    public $timestamps = false;
}
