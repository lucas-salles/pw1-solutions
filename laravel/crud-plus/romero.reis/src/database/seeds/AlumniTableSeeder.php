<?php

use App\Alumnus;
use Illuminate\Database\Seeder;

class AlumniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Alumnus::class, 100)->create();
    }
}