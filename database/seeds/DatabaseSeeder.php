<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Guyub Hana Haq',
            'email' => 'guyubhana@gmail.com',
            'password' => bcrypt('podobiasane'),
        ]);
    }
}
