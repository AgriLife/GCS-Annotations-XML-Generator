<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		if ( ! $this->command->confirm('This will completely reset the DB info. Still wanna do it? [yes|NO]', false))
		{
			exit();
	}

		$this->call('UsersTableSeeder');
		$this->command->info('Users table seeded.');

		$this->call('SitesTableSeeder');
		$this->command->info('Sites table seeded.');

		$this->call('SearchesTableSeeder');
		$this->command->info('Searches table seeded.');

		$this->call('SearchesSitesTableSeeder');
		$this->command->info('Searches_Sites pivot table seeded.');

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}