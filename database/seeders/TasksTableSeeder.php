<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'laravel演習課題１',
        ];
        DB::table('tasks')->insert($param);

        $param = [
            'content' => 'Vue.js演習課題２',
        ];
        DB::table('tasks')->insert($param);

        $param = [
            'content' => 'LP制作課題',
        ];
        DB::table('tasks')->insert($param);

    }
}
