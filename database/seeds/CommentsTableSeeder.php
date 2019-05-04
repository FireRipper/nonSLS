<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table('comments')->insert(
        [
          'name' => Str::random(10),
          'comment' => Str::random(30)
        ]);
    }
}
