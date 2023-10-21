<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordSet extends Model
{
    use HasFactory;
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function wordSetColumns()
    {
        return $this->hasMany(WordSetColumn::class)->orderBy('order');
    }
}
