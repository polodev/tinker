<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Word;
use App\Models\WordSet;
use App\Models\WordSetColumn;
use Helpers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        foreach (Helpers::getWords() as $word) {
            // word
            Word::create([
                'english' => $word,
            ]);
        }
        // post
        Post::create([
            'title' => 'My first Post title',
        ]);
        Post::create([
            'title' => 'My Second Post title',
        ]);

        WordSet::create([
            'post_id' => 1,
            'order' => 1,
            'title' => 'first word set title',
            'type' => 'synonym',
        ]);

        $column_1 = WordSetColumn::create([
            'word_set_id' => 1,
            'title' => 'column 1 title' ,
            'order' => 1,
        ]);
        $column_2 = WordSetColumn::create([
            'word_set_id' => 1,
            'title' => 'column 2 title' ,
            'order' => 2,
        ]);
        $column_3 = WordSetColumn::create([
            'word_set_id' => 1,
            'title' => 'column 3 title' ,
            'order' => 3,
        ]);
        for ($i=1; $i <= 10; $i++) { 
            $column_1->words()->attach($i, ['order' => $i]);
        }
        for ($i=1; $i <= 10; $i++) { 
            $column_2->words()->attach($i+10, ['order' => $i]);
        }
        for ($i=1; $i <= 10; $i++) { 
            $column_3->words()->attach($i+20, ['order' => $i]);
        }


    }
}
