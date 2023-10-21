<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordSetColumn extends Model
{
    use HasFactory;
    public function words()
    {
        return $this->belongsToMany(Word::class, 'pivot_word_set_column_word')
                ->withPivot('order') // Use withPivot to include additional pivot columns
                    ->orderBy('order', 'desc'); 
    }
}
