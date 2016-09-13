<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \App\User::create([
                "email" => "admin@admin.com",
                "name" => "administrator",
                "password"=>"W55H/J9yhNQGHa/NgD9clJfTugWAi82TY+9s/iND4w4="
            ]);   
    }
}
