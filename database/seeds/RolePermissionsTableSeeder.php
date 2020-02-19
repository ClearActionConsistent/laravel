<?php

use Illuminate\Database\Seeder;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_permissions')->insert([
		[
			'role_id' => 1,
			'permission_id' => 5
		],
		[
			'role_id' => 1,
			'permission_id' => 6
		],
		[
			'role_id' => 1,
			'permission_id' => 7
		],
		[
			'role_id' => 1,
			'permission_id' => 8
		],
		[
			'role_id' => 2,
			'permission_id' => 5
		],
		[
			'role_id' => 2,
			'permission_id' => 6
		],
		[
			'role_id' => 2,
			'permission_id' => 7
		],
		[
			'role_id' => 2,
			'permission_id' => 8
		],
		[
			'role_id' => 3,
			'permission_id' => 5
		],
		[
			'role_id' => 3,
			'permission_id' => 6
		],
		[
			'role_id' => 3,
			'permission_id' => 7
		],
		[
			'role_id' => 3,
			'permission_id' => 8
		],
		[
			'role_id' => 4,
			'permission_id' => 5
		],
		[
			'role_id' => 4,
			'permission_id' => 6
		],
		[
			'role_id' => 4,
			'permission_id' => 7
		],
		[
			'role_id' => 4,
			'permission_id' => 8
		]
		]);
    }
}
