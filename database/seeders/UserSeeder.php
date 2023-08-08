<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Record;
use App\Models\TechsupervisoridFieldsupervisorid;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->state([
            'type'=>'techsupervisor'
        ])->create()->each(function($techUser){
            User::factory(5)->state([
                'type'=>'fieldsupervisor'
            ])->create()->each(function($fieldhUser)use ($techUser){
                TechsupervisoridFieldsupervisorid::create([
                    'techsupervisor_id'=>$techUser->id,
                    'fieldsupervisor_id'=>$fieldhUser->id,
                ]);
            });

            Record::factory(5)->state([
                'techsupervisor_id'=>$techUser->id
            ])->create();

        });
     }
}
