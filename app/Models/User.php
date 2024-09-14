<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;




class User extends Authenticatable implements FilamentUser
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


public function canAccessPanel(Panel $panel): bool{
   return $this->role == 'ADMIN';
// if ($this->role == 'ADMIN'){
//     return true;
// }else{
//     false;
// }
}
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
