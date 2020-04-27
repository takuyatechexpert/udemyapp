<?php

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
        // $this->call(UserSeeder::class);
        // seederを使う際はDatabaseSeeder.phpに記述が必要
        $this->call(UsersTableSeeder::class);
        $this->call(ContactFormSeeder::class);
        // seederを変更した場合はcomposer dump-autoloadをした方がよい?
    }
}
