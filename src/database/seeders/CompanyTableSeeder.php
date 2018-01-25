<?php
namespace Edgar\PlanManager\Seeders;

use Edgar\PlanManager\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 4; $i++) {
            Company::create([
                'name' => $faker->company
            ]);
        }
    }
}
