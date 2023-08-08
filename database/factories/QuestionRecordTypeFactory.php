<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionRecordTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {        $arraytype = ['note', 'text','image'];

        return [
            'name' =>$arraytype[mt_rand(0,1)]

        ];
    }
}
