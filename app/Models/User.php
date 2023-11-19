<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * @method static \Illuminate\Database\Eloquent\Builder|User where(string $column, mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIn(string $column, mixed $values)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isClient()
    {
        return $this->role === 'client';
    }

    /**
     * Check if the user is a staff.
     */
    public function isStaff()
    {
        return $this->role === 'staff';
    }

    /**
     * Check if the user is a manager.
     */
    public function isManager()
    {
        return $this->role === 'manager';
    }
}
