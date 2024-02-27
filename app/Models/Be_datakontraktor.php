<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Be_datakontraktor extends Model
{
    use HasFactory;

    // protected $fillable = ['nama_kategori', 'slug'];
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
