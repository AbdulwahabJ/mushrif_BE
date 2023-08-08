<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReportAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrayAns = ['لا', 'نعم'];
        $arraytype = ['note', 'text',];
        $arrayquestion = ['هل كان يرتدي الزي الرسمي', 'هل كان يوجد رئيس تفويج ',];


        return [
            'question' => $arrayquestion[mt_rand(0,1)],
            'answers'=>$arrayAns[mt_rand(0,1)],
            'type' =>$arraytype[mt_rand(0,1)],

        ];
    }
}
