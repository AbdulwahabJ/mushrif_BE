<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrayCampLeble=['110/23','203/10','178/44'];
        $arrayStatus=['Not viewed','Sent','Ignored','Record'];

        return [
            'techsupervisor_id' => $this->faker->randomNumber(9),
            'camp_label'=>$arrayCampLeble[mt_rand(0,2)],
            'office_number' => $this->faker->randomNumber(2),
            'order_status'=>$arrayStatus[mt_rand(0,2)]
        ];
    }
}
