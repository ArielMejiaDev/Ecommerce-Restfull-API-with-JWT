<?php

use App\User;
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
        factory(User::class)->create([
            'name'      => 'Ariel',
            'email'     => 'arielmejiadev@gmail.com',
            'password'  => bcrypt(12345678)
        ]);

        factory(User::class)->create([
            'name'      => 'John Doe',
            'email'     => 'johndoe@mail.com',
            'password'  => bcrypt(12345678)
        ]);

        factory(User::class)->create([
            'name'      => 'Anne Doe',
            'email'     => 'annedoe@mail.com',
            'password'  => bcrypt(12345678)
        ]);
    }
}
