<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hristo Botev
        $author = new Author();
        $author->name = 'Христо Ботев';
        $author->born = '1848';
        $author->died = '1876';
        $author->mandatory_books_count = 9;
        $author->era = 'Христо Ботев живее и твори в буреносната и съдбовна епоха на драматичното шесто и седмо десетилетие на XIX век.';
        $author->bio = 'Христо Ботев е роден на 6 януари 1848 година (25 декември 1847 година стар стил) в Калофер, в семейството на учителя, книжовник и обществен деец, даскал Ботьо Петков (1815 – 1869) и Иванка Ботева (1823 – 1911).';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Hristo-Botev.jpg';
        $author->save();

        // Ivan Vazov
        $author = new Author();
        $author->name = 'Иван Вазов';
        $author->born = '1850';
        $author->died = '1921';
        $author->mandatory_books_count = 12;
        $author->era = 'Христо Ботев живее и твори в буреносната и съдбовна епоха на драматичното шесто и седмо десетилетие на XIX век.';
        $author->bio = 'Иван Минчов Вазов е роден на 9 юли (27 юни стар стил) 1850 г. в Сопот.[1] Произхожда от семейство на средно заможен търговец, в което на почит са строгият ред и патриархалността, уважение към религиозните и битовите традиции, отзивчивостта към възрожденските просветителски и патриотични настроения.';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Ivan-Vazov.png';
        $author->save();

        // Aleko Konstantinov
        $author = new Author();
        $author->name = 'Алеко Константинов';
        $author->born = '1863';
        $author->died = '1897';
        $author->mandatory_books_count = 2;
        $author->era = 'Алеко Констанитнов живее и твори във време на бурни обществени промени, на политически борби, на големи надежди и огромни разочарования. Това е времето ва Руско-турската война и последвалите я събития. България постига своята независимост и се опитва да намери своето място в Европа, да преодолее изостаналостта си във всички сфери на живота.';
        $author->bio = 'Алеко Иваницов Константинов е роден в град Свищов на 13 януари (1 януари стар стил) 1863 г. в семейството на видния свищовски търговец Иваница Хаджиконстантинов, а по майчина линия произхожда от голямата видинска фамилия Шишманови.';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Aleko-Konstantinov.jpg';
        $author->save();

        // Pencho Slaveikov
        $author = new Author();
        $author->name = 'Пенчо Славейков';
        $author->born = '1866';
        $author->died = '1912';
        $author->mandatory_books_count = 5;
        $author->era = 'Последното десетилетие на XIX в. и началото на XX в. се характеризира с нови виждания за българската литература. След Освобеждението част от българските писатели създават реалистични творби, критикуващи негативните обществени и нравствени прояви. За разлика от тях, други творци ориентират своите литературни търсения в нова посока.';
        $author->bio = 'Роден е на 27 април 1866 г. в град Трявна, в семейството на Ирина и Петко Славейкови, които имат още 6 деца – Христо, Иван, Рачо, Райко, Донка, Пенка. За бащата е трудно да се грижи за него, но той намира пари да изпрати сина си на училище. Учи в Стара Загора, където през 1876 г. баща му е назначен за учител. ';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Pencho-Slaveikov.jpg';
        $author->save();

        // Peio Qvorov
        $author = new Author();
        $author->name = 'Пейо Яворов';
        $author->born = '1878';
        $author->died = '1914';
        $author->mandatory_books_count = 9;
        $author->era = 'Пейо Яворов живее и твори в началото на XX век, времето, когато ценностите на общността отстъпват на заден план, за да дадът път на универсалните ценности, на дилемите на личността, на интереса към индивида и неговата уникална духовност.';
        $author->bio = 'Роден е в град Чирпан на 13 януари (1 януари стар стил) 1878 година. Завършва V гимназиален клас в Пловдив. От 1897 до 1901 година работи като телеграфопощенец, сменяйки различни селища – Чирпан, Стара Загора, Сливен, Стралджа, Анхиало, София.';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Peio-Qvorov.jpg';
        $author->save();

        // Elin Pelin
        $author = new Author();
        $author->name = 'Елин Пелин';
        $author->born = '1877';
        $author->died = '1949';
        $author->mandatory_books_count = 9;
        $author->era = 'Епоха';
        $author->bio = 'Кръщелното име на Елин Пелин е Димитър Иванов Стоянов. Роден е на 20 юли 1877 г., който е едно от единадесетте деца в семейството на Йото Варджията и Стоянка Иванова.';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Elin-Pelin.jpg';
        $author->save();

        // Dimcho Debelqnov
        $author = new Author();
        $author->name = 'Димчо Дебелянов';
        $author->born = '1887';
        $author->died = '1916';
        $author->mandatory_books_count = 9;
        $author->era = 'Присъствието на Дебелянов в българската литература е свързано с началото на XX век, когато в страната ни започва за се развива символизмът като едно от проявленията на българския модернизъм.';
        $author->bio = 'Димчо Дебелянов е роден на 28 март 1887 година в Копривщица в семейството на Вельо Дебелянов и Цана Илиева Стайчина, в което е последното, шесто дете.[1] Кръстен е на дядо си Динчо Дебелян. През 1896 г., след смъртта на бащата, семейството се премества в Пловдив при най-големия брат Иван. Там Димчо Дебелянов учи в „Жълтото училище“, по-късно в Пловдивската мъжка гимназия, сега Гимназия с хуманитарен профил „Св. св. Кирил и Методий“, където пише първите си стихотворения, които после изгаря.';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Dimcho-Debelqnov.jpg';
        $author->save();

        // Hristo Smirnenski
        $author = new Author();
        $author->name = 'Христо Смирненски';
        $author->born = '1898';
        $author->died = '1923';
        $author->mandatory_books_count = 7;
        $author->era = 'Eпоха';
        $author->bio = 'Христо Смирненски е роден на 29 септември 1898 година в град Кукуш, тогава в Османската империя, днес Килкис, Гърция. След опожаряването на родния му град, той се премества със семейството си в София. Работи известно време като вестникар и репортер, а също и като писар.';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Hristo-Smirnenski.jpg';
        $author->save();

        // Geo Milev
        $author = new Author();
        $author->name = 'Гео Милев';
        $author->born = '1898';
        $author->died = '1923';
        $author->mandatory_books_count = 1;
        $author->era = 'Eпоха';
        $author->bio = 'Биографсия';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Geo-Milev.jpg';
        $author->save();

        // Atanas Dalchev
        $author = new Author();
        $author->name = 'Атанас Далчев';
        $author->born = '1904';
        $author->died = '1978';
        $author->mandatory_books_count = 8;
        $author->era = 'Eпоха';
        $author->bio = 'Биографсия';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Atanas-Dalchev.jpg';
        $author->save();

        // Elisaveta Bagrqna
        $author = new Author();
        $author->name = 'Елисавета Багряна';
        $author->born = '1893';
        $author->died = '1991';
        $author->mandatory_books_count = 4;
        $author->era = 'Eпоха';
        $author->bio = 'Биографсия';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Elisaveta-Bagrqna.jpg';
        $author->save();

        // Iordan Iovkov
        $author = new Author();
        $author->name = 'Йордан Йовков';
        $author->born = '1880';
        $author->died = '1937';
        $author->mandatory_books_count = 8;
        $author->era = 'Eпоха';
        $author->bio = 'Биографсия';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Iordan-Iovkov.jpg';
        $author->save();

        // Nikola Vapcarov
        $author = new Author();
        $author->name = 'Никола Вапцаров';
        $author->born = '1909';
        $author->died = '1942';
        $author->mandatory_books_count = 9;
        $author->era = 'Eпоха';
        $author->bio = 'Биографсия';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Nikola-Vapcarov.jpg';
        $author->save();

        // Dimitar Dimov
        $author = new Author();
        $author->name = 'Димитър Димов';
        $author->born = '1909';
        $author->died = '1966';
        $author->mandatory_books_count = 1;
        $author->era = 'Eпоха';
        $author->bio = 'Биографсия';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Dimitar-Dimov.png';
        $author->save();


        // Dimitar Talev
        $author = new Author();
        $author->name = 'Димитър Талев';
        $author->born = '1898';
        $author->died = '1966';
        $author->mandatory_books_count = 1;
        $author->era = 'Eпоха';
        $author->bio = 'Биографсия';
        $author->work = 'Творчество';
        $author->topics = 'Основни теми, проблеми и образи';
        $author->image_path = 'Dimitar-Talev.jpg';
        $author->save();

    }
}
