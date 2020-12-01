<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments =[
            [
                'name' => 'Finance',
            ],
            [
                'name' => 'Information Technology',
            ],
            [
                'name' => 'Sales',
            ],
            [
                'name' => 'Administration',
            ],
            [
                'name' => 'Cleaning',
            ],
            [
                'name' => 'Catering',
            ]
            ];
            
        foreach($departments as $department)
              {
                  Department::create([
                   'name' => $department['name'],
                 ]);
               }
    }
}
