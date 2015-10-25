<?php

use Illuminate\Database\Seeder;

class QuotesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Quote', 50)->create();
    }
}
