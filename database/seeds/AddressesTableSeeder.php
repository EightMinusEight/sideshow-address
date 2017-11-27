<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$addresses = [
		    [
			    'address1' => '2630 Conejo Spectrum Street',
			    'address2' => '',
			    'city' => 'Thousand Oaks',
			    'state' => 'CA',
			    'zip' => '91320',
		    ],
		    [
			    'address1' => '13-13 Mockingbird Lane',
			    'address2' => '',
			    'city' => 'Mockingbird Heights',
			    'state' => 'CA',
			    'zip' => '90013',
		    ],
		    [
			    'address1' => '21 Jump st',
			    'address2' => '',
			    'city' => 'Los Angeles',
			    'state' => 'CA',
			    'zip' => '90028',
		    ],[
			    'address1' => '5460 White Oak Ave',
			    'address2' => 'Unit E341',
			    'city' => 'Encino',
			    'state' => 'CA',
			    'zip' => '91316',
		    ]
	    ];

	    DB::table('addresses')->insert($addresses);


    }
}
