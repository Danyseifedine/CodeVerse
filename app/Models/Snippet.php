<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    use HasFactory;

    protected $table = 'snippets';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image',
        'code',
        'category',
    ];

    protected $with = ['user'];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
