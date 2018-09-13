<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Carlos Pina',
            'email'    => 'carlospinadjarfogo@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
