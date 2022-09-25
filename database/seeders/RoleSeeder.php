<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'descr' => 'First',
           'long_descr' => 'First'
        ]);
        DB::table('roles')->insert([
            'descr' => 'Second',
           'long_descr' => 'Second'
        ]);
        DB::table('roles')->insert([
            'descr' => 'Third',
            'long_descr' => 'Third'
        ]);
        DB::table('roles')->insert([
            'descr' => 'Fourth',
           'long_descr' => 'Fourth'
        ]);
    }
}
