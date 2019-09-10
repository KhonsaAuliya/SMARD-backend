<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name' => 'khonsa',
        'email' => 'auliyaosh@gmail.com',
        'password' => Hash::make('oohsehun'),
        'api_token' => Str::random(60),
        'remember_token'=> Str::random(),
        'username' => 'khonsa',
      ]);
    }
}
