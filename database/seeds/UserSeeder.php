<?php

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
        $data = [
            [
                'lname' => 'Cruz',
                'fname' => 'Thumb',
                'address' => 'Canada',
                'phone' => '09839586739',
                'email' => 'thumb007@gmail.com',
                'password' => bcrypt('K##l4~|g7U')
            ],
            [
                'lname' => 'Smith',
                'fname' => 'Francis',
                'address' => 'San Francisco',
                'phone' => '09849274851',
                'email' => 'francicCO123@email.com',
                'password' => bcrypt('\{]nY{@,64')
            ],
            [
                'lname' => 'Jordan',
                'fname' => 'Micheal',
                'address' => 'Bohol',
                'phone' => '09025981098',
                'email' => 'fromJordan24@yahoo.com',
                'password' => bcrypt('].t8G%<qd!')
            ]
        ];

        foreach($data as $user){
            \App\User::create($user);
        }
    }
}
