<?php

use Illuminate\Database\Seeder;

class NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('names')->insert([     
        	'name'    => 'matheww',
        	'address' => 'brazil',
        	'job'     => 'programmer',
        ]);
    }
}
