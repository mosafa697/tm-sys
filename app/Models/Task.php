<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'is_done', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
