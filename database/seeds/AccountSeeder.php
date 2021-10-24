<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Boom_Tarat2',
                'init_invest' => 1000000.23,
                'start_date' => '2016-07-19',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Tararat2',
                'init_invest' => 98762.24,
                'start_date' => '2010-07-10',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Boom3',
                'init_invest' => 2634562.10,
                'start_date' => '2019-08-13',
                'remarks' => 'Done with normal transaction'
            ]
        ];

        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
