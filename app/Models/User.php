<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
    ];

    /**
     * @return HasMany
     */
    public function education(): HasMany
    {

        return $this->hasMany(Education::class);
    }

    /**
     * @return HasMany
     */
    public function experiences(): HasMany
    {

        return $this->hasMany(Experience::class);
    }

    /**
     * @return HasMany
     */
    public function skills(): HasMany
    {

        return $this->hasMany(Skill::class);
    }

    /**
     * @return HasOne
     */
    public function detail(): HasOne
    {

        return $this->hasOne(UserDetail::class);
    }
}
