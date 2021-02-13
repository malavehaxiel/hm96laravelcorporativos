<?php

use App\Models\Corporativo;
use Illuminate\Database\Seeder;

class CorporativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Corporativo::class, 10)->create();
    }
}
