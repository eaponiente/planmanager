<?php
namespace Edgar\PlanManager\Seeders;

use Edgar\PlanManager\Company;
use Edgar\PlanManager\Employee;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 3; $i++) {
            $company = Company::orderByRaw('RAND()')->first();

            Employee::create([
                'name' => $faker->name,
                'company_id' => $company->id
            ]);
        }
    }
}
