<?php

use Illuminate\Database\Seeder;

class DesaparecidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Desaparecido::class, 2)->create();
    }
}
