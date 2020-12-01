<?php

use App\Application;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applications =[
            [
                'user_id' => '1',
                'type' => 'Annual Leave',
                'start_date' => '2020-10-29',
                'end_date' => '2020-12-7',
                'amount' => '9',
                'reason' => 'A system that enables employees of a given company to apply for leave, get leave approvals and check on their remaining leave days.',
                'status' => 'Approved'

            ],
            [
                'user_id' => '1',
                'type' => 'Annual Leave',
                'start_date' => '2020-10-29',
                'end_date' => '2020-12-7',
                'amount' => '9',
                'reason' => 'A system that enables employees of a given company to apply for leave, get leave approvals and check on their remaining leave days.',
                'status' => 'Approved'

            ],
            [
                'user_id' => '1',
                'type' => 'Annual Leave',
                'start_date' => '2020-10-29',
                'end_date' => '2020-12-7',
                'amount' => '9',
                'reason' => 'A system that enables employees of a given company to apply for leave, get leave approvals and check on their remaining leave days.',
                'status' => 'Approved'

            ],
            [
                'user_id' => '2',
                'type' => 'Maternity Leave',
                'start_date' => '2020-10-29',
                'end_date' => '2020-12-7',
                'amount' => '9',
                'reason' => 'A system that enables employees of a given company to apply for leave, get leave approvals and check on their remaining leave days.',
                'status' => 'Approved'

            ],
            [
                'user_id' => '3',
                'type' => 'Paternity Leave',
                'start_date' => '2020-10-29',
                'end_date' => '2020-12-7',
                'amount' => '9',
                'reason' => 'A system that enables employees of a given company to apply for leave, get leave approvals and check on their remaining leave days.',
                'status' => 'Approved'

            ],
            [
                'user_id' => '1',
                'type' => 'Paternity Leave',
                'start_date' => '2020-10-29',
                'end_date' => '2020-12-7',
                'amount' => '9',
                'reason' => 'A system that enables employees of a given company to apply for leave, get leave approvals and check on their remaining leave days.',
                'status' => 'Approved'

            ],
            [
                'user_id' => '2',
                'type' => 'Annual Leave',
                'start_date' => '2020-10-29',
                'end_date' => '2020-12-7',
                'amount' => '9',
                'reason' => 'A system that enables employees of a given company to apply for leave, get leave approvals and check on their remaining leave days.',
                'status' => 'Approved'

            ],
            
            ];
            
        foreach($applications as $application)
              {
                  Application::create([
                   'user_id' => $application['user_id'],
                   'type' => $application['type'],
                   'start_date' => $application['start_date'],
                   'end_date' => $application['end_date'],
                   'amount' => $application['amount'],
                   'reason' => $application['reason'],
                   'status' => $application['status'],
                 ]);
               }
    }
}
