<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
	    	// Uncomment the below to wipe the table clean before populating
	    	DB::table('users')->truncate();

        $users = array(
        	array(
        		'username' => 'admin1',
        		'email' => 'admin1@admin.com',
        		'password' => Hash::make('password'),
        		'confirmation_code' => 'kajsd89fj84jofigjaadsf8vhja908jert',
        		'confirmed' => 1,
                'api_key' => Crypt::encrypt('de82kb0sn23j48gsci2y'),
        	),
        	array(
        		'username' => 'user1',
        		'email' => 'user1@user.com',
        		'password' => Hash::make('password'),
        		'confirmation_code' => 'aliv3989nfao8sdfv9823koun4ra98fv983',
        		'confirmed' => 1,
                'api_key' => Crypt::encrypt('dfliajselivainvasiel'),
        	),
        	array(
        		'username' => 'user2',
        		'email' => 'user2@user.com',
        		'password' => Hash::make('password'),
        		'confirmation_code' => 'a39gtb8n8429q8erb9pfkvjn42g7an8fdb8',
        		'confirmed' => 1,
                'api_key' => Crypt::encrypt('9v2e98na0d9vjasoe9r'),
        	),
        	array(
        		'username' => 'user3',
        		'email' => 'user3@user.com',
        		'password' => Hash::make('password'),
        		'confirmation_code' => 'asievjoenr8kbu8acb09234htnuzb0iasdn',
        		'confirmed' => 1,
                'api_key' => Crypt::encrypt('isvoaienrfaisndvood'),
        	),
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }

}