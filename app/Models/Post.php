<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'text',
        'user_id',
        'category_id',
    ];

    /**
     * Get the comments of the post.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the user that owns the post.
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }
    

    /**
     * Get the category of the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
