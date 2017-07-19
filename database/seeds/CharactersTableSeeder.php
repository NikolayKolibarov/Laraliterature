<?php

use Illuminate\Database\Seeder;
use App\Character;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dqdo Ioco gleda - Ivan Vazov | book_id - 2
        $character = new Character();
        $character->book_id = 19;
        $character->name = 'Дядо Йоцо';
        $character->description = 'Описание';
        $character->save();

        //
    }
}
