<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
 $users = [
        [
            'id'   => '001',
            'name' => 'Imali Susan',
            'email' => 'susanimali@gmail.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '21',
            'role' => 'Employee',
            'department'=> 'Information Technology',
            'password' => bcrypt('passwordsusan'),
        ], 
        [
            'id'   => '008',
            'name' => 'Maryann Gitonga',
            'email' => 'maryanngitonga@gmail.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '21',
            'role' => 'Administrator',
            'department'=> 'Information Technology',
            'password' => bcrypt('passwordmaryann'),
        ], 
        [
            'id'   => '009',
            'name' => 'Maya Bororio',
            'email' => 'mayaboroio@gmail.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '21',
            'role' => 'Employee',
            'department'=> 'Information Technology',
            'password' => bcrypt('passwordmaya'),
        ], 
        [
            'id'   => '0010',
            'name' => 'Whitney Atonya',
            'email' => 'whitneyatonya@gmail.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '21',
            'role' => 'Employee',
            'department'=> 'Information Technology',
            'password' => bcrypt('passwordwhitney'),
        ], 
        [
            'id'   => '002',
            'name' => 'Malachi Moore',
            'email' => 'malachimoore@mailinator.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '17',
            'role' => 'Employee',
            'department'=> 'Finance',
            'password' => bcrypt('123456'),
        ],
        [
            'id'   => '003',
            'name' => 'Anthony Campbell',
            'email' => 'anthonycampbelli@mailinator.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '21',
            'role' => 'Employee',
            'department'=> 'Sales',
            'password' => bcrypt('123456'),
        ],
        [
            'id'   => '004',
            'name' => 'Nora Molina',
            'email' => 'noramolina@mailinator.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '21',
            'role' => 'Employee',
            'department'=> 'Cleaning',
            'password' => bcrypt('123456'),
        ],
        [
            'id'   => '005',
            'name' => 'Imani Hinton',
            'email' => 'imanihinton@mailinator.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '10',
            'role' => 'Employee',
            'department'=> 'Catering',
            'password' => bcrypt('123456'),
        ],
        [
            'id'   => '006',
            'name' => 'Abra Byers',
            'email' => 'abrabyers@mailinator.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '4',
            'role' => 'Employee',
            'department'=> 'Finance',
            'password' => bcrypt('123456'),
        ],
        [
            'id'   => '007',
            'name' => 'Geraldine Luna',
            'email' => 'geraldineluna@mailinator.com',
            'avatar'=> 'avatar.png',
            'phone' => '0772045689',
            'leave_days' => '21',
            'role' => 'Administrator',
            'department'=> 'Administration',
            'password' => bcrypt('123456'),
        ]
        ];
    
    foreach($users as $user)
          {
              User::create([
               'id'  => $user['id'],
               'name' => $user['name'],
               'email' => $user['email'],
               'avatar' => $user['avatar'],
               'phone' => $user['phone'],
               'leave_days' => $user['leave_days'],
               'role' => $user['role'],
               'department' => $user['department'],
               'password' => $user['password']
             ]);
           }
    }
}