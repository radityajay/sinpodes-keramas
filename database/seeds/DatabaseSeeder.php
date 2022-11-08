<?php

use App\User;
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
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$j5sWSRF6ODSqP/fB.LjpdOuR/mOfVKYHeazNdrSNMWdz8iapdGQV.',
            'photo' => null,
            'remember_token' => null,
            'created_at' => '2022-09-12 08:16:26',
            'updated_at' => '2022-09-12 08:16:26',
            'deleted_at' => null,
        ]);
    }
}
