<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 1
        $genre = new Genre();
        $genre->name = 'Елегия';
        $genre->description = 'Елегия е произведение в този жанр, написано по повод скръбно събитие, преживяване или спомен, което често пъти изразява противоречие между идеал и действителност.';
        $genre->save();

        // 2
        $genre = new Genre();
        $genre->name = 'Разказ';
        $genre->description = 'Късо художествено произведение в проза, в което се излага накратко случка, събитие, преживяване.';
        $genre->save();

        // 3
        $genre = new Genre();
        $genre->name = 'Стихотворение';
        $genre->description = '';
        $genre->save();

        // 4
        $genre = new Genre();
        $genre->name = 'Балада';
        $genre->description = '';
        $genre->save();

        // 5
        $genre = new Genre();
        $genre->name = 'Поема';
        $genre->description = '';
        $genre->save();

        // 6
        $genre = new Genre();
        $genre->name = 'Ода';
        $genre->description = '';
        $genre->save();

        // 7
        $genre = new Genre();
        $genre->name = 'Гражданска елегия';
        $genre->description = '';
        $genre->save();

        // 8
        $genre = new Genre();
        $genre->name = 'Повест';
        $genre->description = '';
        $genre->save();

        // 9
        $genre = new Genre();
        $genre->name = 'Роман';
        $genre->description = '';
        $genre->save();

        // 10
        $genre = new Genre();
        $genre->name = 'Цикъл фейлетони';
        $genre->description = '';
        $genre->save();

        // 11
        $genre = new Genre();
        $genre->name = 'Книга';
        $genre->description = '';
        $genre->save();

        // 12
        $genre = new Genre();
        $genre->name = 'Философска поема';
        $genre->description = '';
        $genre->save();

        // 13
        $genre = new Genre();
        $genre->name = 'Лирическа миниатюра';
        $genre->description = '';
        $genre->save();

        // 14
        $genre = new Genre();
        $genre->name = 'Битово-психологическа поема';
        $genre->description = '';
        $genre->save();

        // 15
        $genre = new Genre();
        $genre->name = 'Любовно стихотворение';
        $genre->description = '';
        $genre->save();

        // 16
        $genre = new Genre();
        $genre->name = 'Сонет';
        $genre->description = '';
        $genre->save();

        // 17
        $genre = new Genre();
        $genre->name = 'Поетически цикъл';
        $genre->description = '';
        $genre->save();

        // 18
        $genre = new Genre();
        $genre->name = 'Експресионистична поема';
        $genre->description = '';
        $genre->save();
    }
}
