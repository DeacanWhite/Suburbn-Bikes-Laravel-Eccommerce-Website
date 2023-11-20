<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @method static \Illuminate\Database\Eloquent\Builder|roster where(string $column, mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|roster whereIn(string $column, mixed $values)
 * @method static \Illuminate\Database\Eloquent\Model|roster findOrFail(mixed $id, array $columns = ['*'])
 */
class roster extends Model
{
    use HasFactory;
    protected $table = 'roster';
//    protected $primaryKey = 'id';
    public $timestamps = false;
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
