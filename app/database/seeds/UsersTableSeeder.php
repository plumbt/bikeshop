<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = array([
            'fullname'=>'Harlo Interactive Admin',
            'username'=>'harlo',
            'password'=>Hash::make('harlo411'),
            'email'=>'info@harlointeractive.com',
            'role'=>0
        ]);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
