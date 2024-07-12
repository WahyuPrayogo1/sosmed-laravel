<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'body', 'image', 'likes_count' // Tambahkan likes_count ke fillable
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    // Metode untuk menambahkan like
    public function like()
    {
        $this->increment('likes_count');
        $this->save();
    }

    // Metode untuk menghapus like
    public function unlike()
    {
        $this->decrement('likes_count');
        $this->save();
    }
}
