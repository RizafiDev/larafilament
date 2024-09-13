<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;




class User extends Authenticatable
{
    use HasFactory, Notifiable;


    const ROLE_ADMIN = 'ADMIN';
const ROLE_EDITOR = 'EDITOR';
const ROLE_ARTIST = 'ARTIST';

const ROLES = [
    self::ROLE_ADMIN => 'Admin',
    self::ROLE_EDITOR => 'Editor',
    self::ROLE_ARTIST => 'Artist',
];

    /**
     * The attributes that are mass assignable.
     *
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
