<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id',
        'content',
        'number_like',
        'active',
    ];
    protected $table = 'post_comments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    // public function replies() {
    //     return $this->hasMany(PostCommentReply::class);
    // }

    public function replies() {
        return $this->hasMany(PostCommentReply::class, 'comment_id', 'id');
    }

    public function likes() {
        return $this->belongsToMany(User::class, 'liked_comments', 'comment_id', 'user_id')->withTimestamps();
    }
}