<?php

use Illuminate\Database\Seeder;

class RequestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Requester::class, 20)->create();
    }
}
