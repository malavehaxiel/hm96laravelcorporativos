<?php

use App\Models\DocumentoCorporativo;
use Illuminate\Database\Seeder;

class DocumentoCorporativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DocumentoCorporativo::class, 10)->create();
    }
}
