<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecordAnswer;
use App\Models\ReportAnswer;
use App\Models\Record;
use App\Models\RecordQuestion;
use App\Models\QuestionRecordType;


class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::factory(10)->create()->each(function($record,$index){
            if($index %2==0 ){
                 ReportAnswer::factory(1)->create([
                'report_id'=>$record->id
            ]);
         }
            else{
            QuestionRecordType::factory(1)->create()->each(function($QuestionType)use($record){
              RecordQuestion::factory(3)->create([
                'type_id'=>$QuestionType->name
              ])->each(function($RecordQuestion)use($record){
                RecordAnswer::factory(1)->create([
                    'record_id'=>$record->id,
                    'question_id'=>$RecordQuestion->id
                 ]);

              });


             });

        }

        });
    }
}
