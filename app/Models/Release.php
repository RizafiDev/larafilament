<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',          // Nama artis atau judul release
        'email',         // Alamat email
        'artist_name',   // Nama artis
        'file_path',         // Path file musik
    ];
}
