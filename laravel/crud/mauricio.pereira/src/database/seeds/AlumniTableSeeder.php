<?php

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
        $alumnus = App\Alumnus::create([
            'name' => 'Luiz Chaves',
            'email' => 'luiz.chaves@ifpb.edu.br',
            'linkedin' => 'https://www.linkedin.com/in/luizcrchaves/'
        ]);

        $alumnus = App\Alumnus::create([
            'name' => 'Leandro Almeida',
            'email' => 'leandro.almeida@ifpb.edu.br',
            'linkedin' => 'https://www.linkedin.com/in/leandro-almeida-2601a611/'
        ]);
    }
}
