<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
		[
			'name' => 'view-movie'
		],
		[
			'name' => 'create-movie'
		],
		[
			'name' => 'update-movie'
		],
		[
			'name' => 'delete-movie'
		]
		
		]);
    }
}
