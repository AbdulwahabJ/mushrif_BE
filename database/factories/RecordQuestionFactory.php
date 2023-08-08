<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecordQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrayquestion = ['هل كان يرتدي الزي الرسمي', 'هل كان يوجد رئيس تفويج ',];

        return [
            'content' =>$arrayquestion[mt_rand(0,1)]
        ];
    }
}
