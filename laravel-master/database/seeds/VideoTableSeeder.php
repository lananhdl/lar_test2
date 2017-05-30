<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('video')->insert(
					[
						[
							'namevideo' => 'Video 1',
							'linkvideo' => 'https://www.youtube.com/watch?v=UkYCEcwX9U0',
							'author' => 'tác giả 1',
						],
						[
							'namevideo' => 'Video 2',
							'linkvideo' => 'https://www.youtube.com/watch?v=C3-u45_k0f4',
							'author' => 'tác giả 2',
						],
						[
							'namevideo' => 'Video 3',
							'linkvideo' => 'https://www.youtube.com/watch?v=C3-u45_k0f4',
							'author' => 'tác giả 3',
						],
						[
							'namevideo' => 'Video 4',
							'linkvideo' => 'https://www.youtube.com/watch?v=C3-u45_k0f4',
							'author' => 'tác giả 4',
						],
					]
				);
    }
}
