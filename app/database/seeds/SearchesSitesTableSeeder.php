<?php

class SearchesSitesTableSeeder extends Seeder {

    public function run()
    {
	    	// Uncomment the below to wipe the table clean before populating
	    	DB::table('searches_sites')->truncate();

        $searches_sites = array(
        	array(
						'search_id' => 1,
						'site_id'   => 1,
        	),
        	array(
						'search_id' => 1,
						'site_id'   => 2,
        	),
        	array(
						'search_id' => 2,
						'site_id'   => 3,
        	),
        	array(
						'search_id' => 2,
						'site_id'   => 4,
        	),
        	array(
						'search_id' => 2,
						'site_id'   => 5,
        	),
        	array(
						'search_id' => 3,
						'site_id'   => 4,
        	),
        	array(
						'search_id' => 3,
						'site_id'   => 5,
        	),
        	array(
						'search_id' => 4,
						'site_id'   => 6,
        	),
        	array(
						'search_id' => 4,
						'site_id'   => 7,
        	),
        );

        // Uncomment the below to run the seeder
        DB::table('searches_sites')->insert($searches_sites);
    }

}