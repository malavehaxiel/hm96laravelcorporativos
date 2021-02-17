<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CorporativoSeeder::class);
        $this->call(DocumentoSeeder::class);
        $this->call(DocumentoCorporativoSeeder::class);
        $this->call(ContratoSeeder::class);
        $this->call(ContactoSeeder::class);
    }
}
