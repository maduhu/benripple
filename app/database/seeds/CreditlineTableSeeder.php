<?php

class CreditlineTableSeeder extends Seeder {

    public function run()
    {
        DB::table('creditlines')->delete();

	//DB::insert('insert into creditlines (from, to) values (?, ?)', array(1, 2));

	Creditline::create(array(
		'from' => 1,
		'to'  => 2,
		'good_id' => 1,
		'private' => false,
		'dividend' => false,
		'balance' => 0,
		'trust' => 13
));

Creditline::create(array(
		'from' => 1,
		'to'  => 3,
		'balance' => 15,
		'trust' => 25, 
		'good_id' => 1
));

Creditline::create(array(
		'from' => 2,
		'to'  => 3,
		'balance' => 0,
		'trust' => 10, 
		'good_id' => 1
));

Creditline::create(array(
		'from' => 3,
		'to'  => 2,
		'balance' => 2,
		'trust' => 20, 
		'good_id' => 1
));
    }
}
