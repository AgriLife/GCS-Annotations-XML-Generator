<?php

class SitesTableSeeder extends Seeder {

    public function run()
    {
	    	// Uncomment the below to wipe the table clean before populating
	    	DB::table('sites')->truncate();

        $sites = array(
        	array(
						'user_id' => 1,
						'name'    => 'Agrilife.org',
						'url'     => 'agrilife.org/*',
						'comment' => 'Main AgriLife site',
        	),
        	array(
						'user_id' => 1,
						'name'    => 'AgriLife Awards',
						'url'     => 'awards.agrilife.org/*',
						'comment' => 'Awards site',
        	),
        	array(
						'user_id' => 2,
						'name'    => 'COALS',
						'url'     => 'aglifesciences.tamu.edu/*',
						'comment' => 'Main COALS site',
        	),
        	array(
						'user_id' => 2,
						'name'    => 'Ag Economics',
						'url'     => 'ageco.tamu.edu/*',
						'comment' => 'AECO Department site',
        	),
        	array(
						'user_id' => 2,
						'name'    => 'Ento',
						'url'     => 'entomology.tamu.edu/*',
						'comment' => '',
        	),
        	array(
						'user_id' => 3,
						'name'    => 'TVMDL',
						'url'     => 'tvmdl.tamu.edu/*',
						'comment' => 'Main TVMDL site',
        	),
        	array(
						'user_id' => 3,
						'name'    => 'FAZD',
						'url'     => 'fazd.tamu.edu/*',
						'comment' => '',
        	),
        );

        // Uncomment the below to run the seeder
        DB::table('sites')->insert($sites);
    }

}