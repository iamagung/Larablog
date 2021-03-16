<?php

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
        $user = App\User::create([
            'name'     => 'Agung Pratama',
            'email'    => 'Godevelopper@gmail.com',
            'password' => bcrypt('password'),
            'admin'    => 1
        ]);

        App\Profile::create([
            'user_id'  => $user->id,
            'avatar'   => 'uploads/avatars/1.png',
            'about'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias eligendi quo odit expedita mollitia? Fugiat.',
            'facebook' => 'facebook.com',
            'youtube'  => 'youtube.com'
        ]);
    }
}
