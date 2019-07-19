<?php

use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO Delete each
        factory(App\Request::class, 50)->create()->each(function ($request) {
            $file = \App\File::create([
                'name' => 'asd' . mt_rand(0, 100),
                'ext' => 'pdf',
                'path' => '/str',
                'size' => mt_rand(0, 200000),
                'user_id' => mt_rand(2, 50),
            ]);

            \App\FileRequestFileImage::create([
                'request_id' => $request->id,
                'file_id' => $file->id,
                'image_id' => \App\File::create([
                    'name' => 'asd' . mt_rand(0, 100),
                    'ext' => 'png',
                    'path' => '/str',
                    'size' => mt_rand(0, 200000),
                    'user_id' => mt_rand(2, 50),
                ])->id,
            ]);

            $request->files()->save($file);
        });
    }
}
