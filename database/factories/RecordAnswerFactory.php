<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecordAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrayAns = ['لا', 'نعم'];

        return [
            'content' => $arrayAns[mt_rand(0,1)],
        ];
    }
}
