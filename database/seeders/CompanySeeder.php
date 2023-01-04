<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range (1,100) as $index){
        DB::table('companies')->insert([
            'name' => $faker->company,
            'email' => $faker->companyEmail,
        	'address' =>$faker->address
        ]);
    }
        // DB::table('companies')->insert([
        //     'name' => 'Rizka Ramdani',
        //     'email' => 'Rizkaramdani@gmail.com',
        // 	'address' => 'Ciamis',
        // ]);
    }
}
