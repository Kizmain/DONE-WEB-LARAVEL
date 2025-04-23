<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Forum extends Model
{
    use HasFactory;

    // Kolom yang boleh dimass assign
    protected $fillable = ['judul', 'isi'];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
