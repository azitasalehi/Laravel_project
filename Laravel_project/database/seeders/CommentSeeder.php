<?php

namespace Database\Seeders;


use App\Models\Comments;
use Illuminate\Database\Seeder;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       Comments::factory(30)->create();
    }
}
