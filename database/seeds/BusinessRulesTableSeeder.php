<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessRulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_rules')->insert([
		[
			'title' => 'New Release => basice price * 3 if renting days < 3'
		],
		[
			'title' => 'New Release => basice price * 2.5 if renting days > 3'
		],
		[
			'title' => 'Regular => basic price * 1.5 if renting days < 3'
		],
		[
			'title' => 'Regular => basic price * 1 if renting days > 3'
		],
		[
			'title' => 'For Kid => basic price * 1 if renting days < 3'
		],
		[
			'title' => 'For Kid => basic price * 0.5 if renting days > 3'
		]
		]);
    }
}
