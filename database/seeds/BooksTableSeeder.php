<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Hristo Botev Books ID1

        // Maice si
        $book = new Book();
        $book->author_id = 1;
        $book->genre_id = 1;
        $book->title = 'Майце си';
        $book->content = 'Ти ли си, мале, тъй жално пела, ти ли си мене три годин клела, та скитник ходя злочестен ази и срещам това, що душа мрази? 

Бащино ли съм пропил имане, тебе ли покрих с дълбоки рани, та мойта младост, мале, зелена съхне и вехне люто язвена?!

Весел ме гледат мили другари, че с тях наедно и аз се смея, но те не знаят, че аз веч тлея, че мойта младост слана попари!

Отде да знаят? Приятел нямам да му разкрия що в душа тая; кого аз любя и в какво вярвам - мечти и мисли - от що страдая.

Освен теб, мале, никого нямам, ти си за мене любов и вяра; но тука вече не се надявам тебе да любя: сърце догаря!

Много аз, мале, много мечтаях щастие, слава да видим двама, сила усещах - що не желаях? Но за вси желби приготви яма!

Една сал клета, една остана: в прегръдки твои мили да падна, та туй сърце младо, таз душа страдна да се оплачат тебе горкана...

Баща и сестра и братя мили аз да прегърна искам без злоба, пък тогаз нека измръзнат жили, пък тогаз нека изгния в гроба!';

        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Kum brata si
        $book = new Book();
        $book->author_id = 1;
        $book->genre_id = 1; // elegiq
        $book->title = 'Към брата си';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Elegiq
        $book = new Book();
        $book->author_id = 1;
        $book->genre_id = 1;
        $book->title = 'Елегия';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Borba
        $book = new Book();
        $book->author_id = 1;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Борба';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Do moeto purvo libe
        $book = new Book();
        $book->author_id = 1;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'До моето първо либе';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Na proshtavane
        $book = new Book();
        $book->author_id = 1;
        $book->genre_id = 5; // poema
        $book->title = 'На прощаване';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Hadji Dimitur
        $book = new Book();
        $book->author_id = 1;
        $book->genre_id = 4; // balada
        $book->title = 'Хаджи Димитър';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Moqta molitva
        $book = new Book();
        $book->author_id = 1;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Моята молитва';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Obesvaneto na Vasil Levski
        $book = new Book();
        $book->author_id = 1;
        $book->genre_id = 1; // elegiq
        $book->title = 'Обесването на Васил Левски';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //

        // Ivan Vazov Books ID2

        // Bulgarskiqt ezik
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 6; // oda
        $book->title = 'Българският език';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Otechestvo lubezno, kak hubavo si ti!
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 6; // oda
        $book->title = 'Отечество любезно, как хубаво си ти!';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Pri Rilskiq manastir
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 6; // oda
        $book->title = 'При Рилския манастир';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // "Elate ni vijte!"
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 7; // grajdanska elegiq
        $book->title = '"Елате ни вижте!"';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Linee nashto pokolenie
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 7; // grajdanska elegiq
        $book->title = 'Линее нашто поколенье...';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Levski
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 6; // oda
        $book->title = 'Левски';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Paisii
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 6; // oda
        $book->title = 'Паисий';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Kocho (Zashtitata pri Perushtica)
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 6; // oda
        $book->title = 'Кочо (Защитата на Перущица)';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Opulchencite na Shipka
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 6; // oda
        $book->title = 'Опълченците на Шипка';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Dqdo Ioco gleda
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 2; // razkaz
        $book->title = 'Дядо Йоцо гледа';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Chichovci
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 8; // povest
        $book->title = 'Чичовци';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Pod igoto
        $book = new Book();
        $book->author_id = 2;
        $book->genre_id = 9; // roman
        $book->title = 'Под игото';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //

        // Aleko Konstantinov Books ID3

        // Razni hora, razni ideali
        $book = new Book();
        $book->author_id = 3;
        $book->genre_id = 10; // cikul feiletoni
        $book->title = 'Разни хора, разни идеали';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Bai Ganio
        $book = new Book();
        $book->author_id = 3;
        $book->genre_id = 11; // kniga
        $book->title = 'Бай Ганьо';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->plot = 'Основни сюжетни моменти';
        $book->conflicts = 'Конфликти';
        $book->artistic_chronotope = 'Художествено време и пространство';
        $book->narrator = 'Повествовател';
        $book->artistic_techniques = 'Художествени похвати и средства';
        $book->save();

        //

        // Pencho Slaveikov Books ID4

        // Cis moll
        $book = new Book();
        $book->author_id = 4;
        $book->genre_id = 12; // filosofska poema
        $book->title = 'Cis moll';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Ni luh ni duhva nad poleni
        $book = new Book();
        $book->author_id = 4;
        $book->genre_id = 13; // liricheska miniatura
        $book->title = 'Ни лъх ни дъхва над полени';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Spi ezeroto
        $book = new Book();
        $book->author_id = 4;
        $book->genre_id = 13; // liricheska miniatura
        $book->title = 'Спи езерото';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Samoten grob v samoten kut
        $book = new Book();
        $book->author_id = 4;
        $book->genre_id = 13; // liricheska miniatura
        $book->title = 'Самотен гроб в самотен кът';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Ralica
        $book = new Book();
        $book->author_id = 4;
        $book->genre_id = 14; // bitovo-psihologicheska poema
        $book->title = 'Ралица';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //

        // Peio Qvorov Books

        // Gradushka
        $book = new Book();
        $book->author_id = 5;
        $book->genre_id = 5; // poema
        $book->title = 'Градушка';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Zatochenici
        $book = new Book();
        $book->author_id = 5;
        $book->genre_id = 1; // elegiq
        $book->title = 'Заточеници';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Shte budesh v bqlo
        $book = new Book();
        $book->author_id = 5;
        $book->genre_id = 15; // lubovno stihotvorenie
        $book->title = 'Ще бъдеш в бяло';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Dve hubavi ochi
        $book = new Book();
        $book->author_id = 5;
        $book->genre_id = 15; // lubovno stihotvorenie
        $book->title = 'Две хубави очи';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Ston (Na Lora)
        $book = new Book();
        $book->author_id = 5;
        $book->genre_id = 15; // lubovno stihotvorenie
        $book->title = 'Стон (На Лора)';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Dve dushi
        $book = new Book();
        $book->author_id = 5;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Две души';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Senki
        $book = new Book();
        $book->author_id = 5;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Сенки';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Pesenta na choveka
        $book = new Book();
        $book->author_id = 5;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Песента на човека';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Maska
        $book = new Book();
        $book->author_id = 5;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Маска';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //

        // Elin Pelin Books

        // Vetrenata melnica
        $book = new Book();
        $book->author_id = 6;
        $book->genre_id = 2; // razkaz
        $book->title = 'Ветрената мелница';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Kosachi
        $book = new Book();
        $book->author_id = 6;
        $book->genre_id = 2; // razkaz
        $book->title = 'Косачи';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Zadushnica
        $book = new Book();
        $book->author_id = 6;
        $book->genre_id = 2; // razkaz
        $book->title = 'Задушница';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Mechtateli
        $book = new Book();
        $book->author_id = 6;
        $book->genre_id = 2; // razkaz
        $book->title = 'Мечтатели';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Na onq svqt
        $book = new Book();
        $book->author_id = 6;
        $book->genre_id = 2; // razkaz
        $book->title = 'На оня свят';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Andreshko
        $book = new Book();
        $book->author_id = 6;
        $book->genre_id = 2; // razkaz
        $book->title = 'Андрешко';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Chorba ot grehovete na otec Nikodim
        $book = new Book();
        $book->author_id = 6;
        $book->genre_id = 2; // razkaz
        $book->title = 'Чорба от греховете на отец Никодим';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Zanemelite kambani
        $book = new Book();
        $book->author_id = 6;
        $book->genre_id = 2; // razkaz
        $book->title = 'Занемелите камбани';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Geracite
        $book = new Book();
        $book->author_id = 6;
        $book->genre_id = 8; // povest
        $book->title = 'Гераците';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //

        // Dimcho Debelqnov Books

        // Cherna pesen
        $book = new Book();
        $book->author_id = 7;
        $book->genre_id = 1; // elegiq
        $book->title = 'Черна песен';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Plovdiv
        $book = new Book();
        $book->author_id = 7;
        $book->genre_id = 16; // sonet
        $book->title = 'Пловдив';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Skriti vopli
        $book = new Book();
        $book->author_id = 7;
        $book->genre_id = 1; // elegiq
        $book->title = 'Скрити вопли';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Pomnish li, pomnish li
        $book = new Book();
        $book->author_id = 7;
        $book->genre_id = 1; // elegiq
        $book->title = 'Помниш ли, помниш ли';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Spi gradut
        $book = new Book();
        $book->author_id = 7;
        $book->genre_id = 1; // elegiq
        $book->title = 'Спи градът';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Mig
        $book = new Book();
        $book->author_id = 7;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Миг';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Edit ubit
        $book = new Book();
        $book->author_id = 7;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Един убит';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Sirotna pesen
        $book = new Book();
        $book->author_id = 7;
        $book->genre_id = 1; // elegiq
        $book->title = 'Сиротна песен';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Tiha pobeda
        $book = new Book();
        $book->author_id = 7;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Тиха победа';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //

        // Hristo Smirnenski Books

        // Da bude den!
        $book = new Book();
        $book->author_id = 8;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Да бъде ден!';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Nii
        $book = new Book();
        $book->author_id = 8;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Ний';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Iohan
        $book = new Book();
        $book->author_id = 8;
        $book->genre_id = 5; // poema
        $book->title = 'Йохан';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Unosha
        $book = new Book();
        $book->author_id = 8;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Юноша';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Stariq muzikant
        $book = new Book();
        $book->author_id = 8;
        $book->genre_id = 1; // elegiq
        $book->title = 'Стария музикант';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Cvetarka
        $book = new Book();
        $book->author_id = 8;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Цветарка';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Zimni vecheri
        $book = new Book();
        $book->author_id = 8;
        $book->genre_id = 17; // poeticheski cikul
        $book->title = 'Зимни вечери';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //

        // Geo Milev Books

        // Septemvri
        $book = new Book();
        $book->author_id = 9;
        $book->genre_id = 18; // ekspresionistichna poema
        $book->title = 'Септември';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //

        // Atanas Dalchev Books

        // Prozorec
        $book = new Book();
        $book->author_id = 10;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Прозорец';
        $book->title_analysis = 'Публикувано в първата Далчева стихосбирка и дава името й (програмен текст). Заглавието насочва към прозореца, който е символ на граница между дома и пътя, като изглед към света отвъд дома и като вход към познанието за света.';
        $book->topic = 'За реалното и въображаемото, за баналното и приказното, възторжения детски поглед към бълшебствата на фантазията.';
        $book->composition = 'Стихотворението е изградено от 7 четиристишни строфи и композиционно рамкирано от мотива за света на реалността. Същинската част на художествения текст въздейства чрез фантазни образи и картини.';
        $book->lyrical_speaker = 'Лирическия говорител представя света на въображаемото и фантазното чрез лирическите герои - "мойто братче и мойта сестра".';
        $book->dominant_feelings = 'Внушава невинното детско удивление пред приказно красивите чудеса на света, родени от въображението.';
        $book->motives = 'Централни са образите на лирическия Аз и неговия поглед към един вълшебно красив цвят и на двамата приказни герои. Текстът интерпретира мотивите за дома и пътя, за въображаемото и реалното.';
        $book->message = '"Прозорецът" към одухотворения мир на фантазията е алтернатива на сивото и скучно ежедневие. Тази творба е най-красивата Далчева приказка, реабилитираща по детски невинния, неизкусен и мечтателен поглед към света. "Нашето зимно стъкло" елиминира реалната видимост на нещата и през него се очертават контурите на вълшебна картина. Пътят и къщите изчезват, за да остане само една "бяла гора от сребро", сред която прегърнати вървят две деца. Сребърно, злато и алено са ярките багри на тази приказка за доброто, за търсенето на красотата на необикновенното, за правото на въображенито да съзира чудесата зад видимата установенност на реалните неща.';
        $book->tropes = '"Вълшебната птица с лъчезарните златни пера" е опоетизирания образ символ на преоткриването на свежестта и чудото на живота, на новораждането на света в неговата завладяваща и притегателна сила. Този извисен символен образ е контрапунктът на извехтелите и банализирани Далчеви предмети - знаци на сивото, потискащо, безсмислено и ограбващо битие.';
        $book->save();

        // Bolnica
        $book = new Book();
        $book->author_id = 10;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Болница';
        $book->title_analysis = 'Заглавието му е метафоричен образ на болезненото, обречено, обсебено от смъртта съществуване.';
        $book->topic = 'Темата и проблемите съ свързани с живота и смъртта, с живота като бавно изтляване, като една непрестанна агония, като ежедневно умиране.';
        $book->composition = 'Текстът е изграден от три строфи с по четири стиха и не съдържа нито една глаголна форма. Причастията допълнително засилват усещането за агония и смърт.';
        $book->lyrical_speaker = 'Лирическият говорител, размишлява върху тленния човешки жребий и илюстрира печалните си философски размисли както чрез лишените от човешката си цялост с представени метонимично болни лирически герои, така и посредством предметите - знаци на изчезващото битие. Тук липсват хора със свой индивидуален облик и автентично човешко присъствие. Те са бледи сенки, тъжни въплъщения на безнадеждността, абстрактни обобщения на страданието, на неизживения живот.';
        $book->dominant_feelings = 'Стихотворението  поражда мрачни прозрения за обреченото човешко съществуване.';
        $book->motives = 'В стихотворението са интерпретирани мотивите за времето, което отнема живот; за съществуването като безнадеждна агония; за липсата на спасение. Тези мотиви са представени от обезличените човешки присъствия - отсъствия от баналните, грозни, отблъскващи предмети - "прозорци, тъжожвни/ със петна от мухи и с бразди от прахът и дъждът", "и звънът ва големия стенен часовник/ сякаш тежките стъпки на близката смърт"';
        $book->message = '';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Staqta
        $book = new Book();
        $book->author_id = 10;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Стаята';
        $book->content = 'Би казал, че във тази стая
        не е живял отдавна никой,
че е заключена стояла
        с години нейната врата.
Тук има миризма на вехто
        и прах по всичките неща,
тук бавно времето превръща
        във прах безжизнен сякаш всичко.
 
В ъглите расне неусетно
        вечерната дрезгавина
и вехне есенното слънце
        върху килимите на пода,
а светят жълти зимни дюли,
        наредени върху комода
като голяма броеница
        от кехлибарени зърна.
 
Какви лица ли отразило
        ревниво пази огледалото?
То сякаш е един прозорец,
        отворен в друг предишен свят.
Часовникът е вече млъкнал
        и в неговия чер ковчег
лежат умрели часовете
        и неподвижно спи махалото.
 
Портрети на жени, които
        са си отишли от света,
висят, от слънце пожълтели,
        окачени върху стената,
заспала тежко върху пода,
        сънува в здрача тишината
и цялата печална стая
        залязва бавно с вечерта.
 
1925 г.';
        $book->title_analysis = 'Заглавието откроява стаята като елемент от "дома ", но художественият текст апострофира тази представа и превръща стаята в метафора на празнотата, пустотата, самотата на човешкото съществуване.';
        $book->topic = 'Темата и проблемите са за опредметното, а не живяно битие; за умъртвяващото време, за изолацията на човека от света, от пората и от живота; за отчуждението и себеотчуждението.';
        $book->composition = 'Стихотворението е изградено от четири строфи с по осем стиха, раздвижени графически. Началото въвежда образа на заключената стая, а финалът откроява образа на залязващата "с вечерта" стая - така и на структурното равнище се внушават посланията за отчудението, празнотата на битието, смъртта.';
        $book->lyrical_speaker = 'Максимално скрит, деперсонализиран, изграждащ представата за един хипотетчно-условен свят ("би казал"), а разгърнатата картина на стаята и на вещите в нея, сред които липсва човекът, е философски размисъл за смисъла на съществуването.';
        $book->dominant_feelings = 'Стихотворението внушава усещане за пустота, за пропуснат смисъл, за изтляване на човешкото, за овеществяване, агония, смърт.';
        $book->motives = 'Основен е мотивът за изтляването на битието, интерпретиран посредством затвореното пространство на стаята, овехтяването и превръщането в прах на вещите, отсъствието на човека.';
        $book->message = 'Стаята е застинала в своята неподвижност и мъртвина. Това не е уютният, обитаван, обживян и сподел дом на човека. Това са четирите стени, заграждащи неговата самота. Всъщност и тук откриваме единствено отсъствия - стая без топлина, интериор без живот, дом без стопанин: "Би казал, че във тази сатия не е живял отдавна никой...". Значенията на пустота и смърт са кодирани и в образа на превръщащото всичко в прах време; и в жълтия цвят, обагрил предметите в болезнената си есенно-увяхваща гама; и в елиминиранетона всякакво движение';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Kushtata
        $book = new Book();
        $book->author_id = 10;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Къщата';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Povest
        $book = new Book();
        $book->author_id = 10;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Повест';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Knigite
        $book = new Book();
        $book->author_id = 10;
        $book->genre_id = 1; // elegiq
        $book->title = 'Книгите';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Kamuk
        $book = new Book();
        $book->author_id = 10;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Камък';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Dqvolsko
        $book = new Book();
        $book->author_id = 10;
        $book->genre_id = 1; // elegiq
        $book->title = 'Дяволско';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //

        // Elisaveta Bagrqna Books
        // Kukuvica
        $book = new Book();
        $book->author_id = 11;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Кукувица';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Stihii
        $book = new Book();
        $book->author_id = 11;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Стихии';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Potomka
        $book = new Book();
        $book->author_id = 11;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Потомка';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Vechnata
        $book = new Book();
        $book->author_id = 11;
        $book->genre_id = 3; // stihotvorenie
        $book->title = 'Вечната';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();
        //

        // Iordan Iovkov Books

        // Pesenta na koleletata
        $book = new Book();
        $book->author_id = 12;
        $book->genre_id = 2; // разказ
        $book->title = 'Песента на колелетата';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Posledna radost
        $book = new Book();
        $book->author_id = 12;
        $book->genre_id = 2; // разказ
        $book->title = 'Последна радост';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //Shibil
        $book = new Book();
        $book->author_id = 12;
        $book->genre_id = 2; // разказ
        $book->title = 'Шибил';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Prez chumavoto
        $book = new Book();
        $book->author_id = 12;
        $book->genre_id = 2; // разказ
        $book->title = 'През чумавото';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Indje
        $book = new Book();
        $book->author_id = 12;
        $book->genre_id = 2; // разказ
        $book->title = 'Индже';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Albena
        $book = new Book();
        $book->author_id = 12;
        $book->genre_id = 2; // разказ
        $book->title = 'Албена';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Drugoselec
        $book = new Book();
        $book->author_id = 12;
        $book->genre_id = 2; // разказ
        $book->title = 'Другоселец';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Serafim
        $book = new Book();
        $book->author_id = 12;
        $book->genre_id = 2; // разказ
        $book->title = 'Серафим';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();
        //

        // Nikola Vapcarov

        // Vqra
        $book = new Book();
        $book->author_id = 13;
        $book->genre_id = 3; // стихотворение
        $book->title = 'Вяра';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        //Pismo
        $book = new Book();
        $book->author_id = 13;
        $book->genre_id = 3; // стихотворение
        $book->title = 'Писмо';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Pesen za choveka
        $book = new Book();
        $book->author_id = 13;
        $book->genre_id = 3; // стихотворение
        $book->title = 'Песен за човека';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Sun
        $book = new Book();
        $book->author_id = 13;
        $book->genre_id = 3; // стихотворение
        $book->title = 'Сън';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Istoriq
        $book = new Book();
        $book->author_id = 13;
        $book->genre_id = 3; // стихотворение
        $book->title = 'История';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Zavod
        $book = new Book();
        $book->author_id = 13;
        $book->genre_id = 3; // стихотворение
        $book->title = 'Завод';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Kino
        $book = new Book();
        $book->author_id = 13;
        $book->genre_id = 3; // стихотворение
        $book->title = 'Кино';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Proshtalno
        $book = new Book();
        $book->author_id = 13;
        $book->genre_id = 3; // стихотворение
        $book->title = 'Прощално';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

        // Predsmurtno ( Borbata e bezmilostno jestoka )
        $book = new Book();
        $book->author_id = 13;
        $book->genre_id = 3; // стихотворение
        $book->title = 'Предсмъртно (Борбата е безмилостно жестока)';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();
        //

        // Dimitar Dimov Books

        // Tutun
        $book = new Book();
        $book->author_id = 14;
        $book->genre_id = 9; // roman
        $book->title = 'Тютюн';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();
        //

        // Dimitar Talev Books

        // Jelezniqt Svetilnik
        $book = new Book();
        $book->author_id = 15;
        $book->genre_id = 9; // roman
        $book->title = 'Железният светилник';
        $book->title_analysis = 'Заглавие, година на първа публикация';
        $book->topic = 'Основна тема и проблеми';
        $book->composition = 'Композиция';
        $book->lyrical_speaker = 'Лирически говорител, лирически герои';
        $book->dominant_feelings = 'Преобладаващи чувства';
        $book->motives = 'Основни образи и мотиви';
        $book->message = 'Послания, идеи';
        $book->tropes = 'Тропи и фигури';
        $book->plot = null;
        $book->save();

    }
}
