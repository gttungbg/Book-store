<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = [
            'book_id' => 1,
            'user_id' => 1,
            'comment' => 'This book is very good'
        ];
        Comment::create($comment);
    }
}
