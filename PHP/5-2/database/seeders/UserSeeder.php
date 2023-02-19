<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'テスト',
            'email' => 'test@test.com',
            'password' => 'testsann',
        ]);

        User::create([
            'name' => 'テスト1',
            'email' => 'test1@test.com',
            'password' => 'test1sann',
        ]);

        User::create([
            'name' => 'テス2',
            'email' => 'test2@test.com',
            'password' => 'test2sann',
        ]);
    }
}
