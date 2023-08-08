<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RecordSeeder::class,
        ]);


        // \App\Models\User::factory(10)->create();

        // DB::table('ReportAnswer')->insert([
        //     'question' => 'هل كان يوجد رئيس تفويج',
        //     'answers' => 'نعم',
        //     'type' => 'text',
        //     'report_id' => '1',

        // ]);

        // DB::table('ReportAnswer')->insert([
        //     'question' => 'هل كان يرتدي الزي الرسمي',
        //     'answers' => 'نعم',
        //     'type' => 'text',
        //     'report_id' => '1',

        // ]);

        // DB::table('ReportAnswer')->insert([
        //     'question' => 'الملاحظات',
        //     'type' => 'note',
        //     'report_id' => '1',

        // ]);
    }
}
