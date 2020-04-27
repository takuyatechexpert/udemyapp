<?php

use Illuminate\Database\Seeder;
use App\Models\ContactForm;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(ContactForm::class,200)->create();
        // 200個のダミーデータを作成する
        // factoryディレクトリのファイルを参照している
        // useでmodelを引っ張ってくる必要がある
        // seederを使う際はDatabaseSeeder.phpに記述が必要
    }
}
