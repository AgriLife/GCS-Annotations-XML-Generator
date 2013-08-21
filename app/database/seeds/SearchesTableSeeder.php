<?php

class SearchesTableSeeder extends Seeder {

    public function run()
    {
	    	// Uncomment the below to wipe the table clean before populating
	    	DB::table('searches')->truncate();

        $searches = array(
        	array(
						'user_id' => 1,
						'name'    => 'AgriLife Main',
						'label'   => '_cse_hd82jv92',
        	),
        	array(
						'user_id' => 2,
						'name'    => 'COALS All',
						'label'   => '_cse_gjh28cnt',
        	),
        	array(
						'user_id' => 2,
						'name'    => 'COALS Departments',
						'label'   => '_cse_in382nd9',
        	),
        	array(
						'user_id' => 3,
						'name'    => 'TVMDL All',
						'label'   => '_cse_48nv2nd9',
        	),
        	array(
						'user_id' => 4,
						'name'    => 'AgriLife Research',
						'label'   => '_cse_n28cu28g',
        	),
        );

        // Uncomment the below to run the seeder
        DB::table('searches')->insert($searches);
    }

}