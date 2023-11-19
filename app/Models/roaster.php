<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @method static \Illuminate\Database\Eloquent\Builder|roaster where(string $column, mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|roaster whereIn(string $column, mixed $values)
 * @method static \Illuminate\Database\Eloquent\Model|roaster findOrFail(mixed $id, array $columns = ['*'])
 */
class roaster extends Model
{
    use HasFactory;
    protected $table = 'roaster';
//    protected $primaryKey = 'id';
    public $timestamps = false;
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
