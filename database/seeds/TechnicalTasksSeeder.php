<?php

use Illuminate\Database\Seeder;


class TechnicalTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\TechnicalTask::class, 200)->create();
    }
}
