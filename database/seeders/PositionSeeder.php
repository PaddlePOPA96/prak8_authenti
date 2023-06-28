<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Position;
use Illuminate\Database\Seeder;



class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'code' => 'FE',
                'name' => 'Front End Developer',
                'description' => 'Front End Developer'
            ],
            [
                'code' => 'BE',
                'name' => 'Back End Developer',
                'description' => 'Back End Developer'
            ],
            [
                'code' => 'SA',
                'name' => 'System Analyst',
                'description' => 'System Analyst'
            ],
        ]);

        Position::factory()->count(5)->create();
    }
}
