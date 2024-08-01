<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $words = [
            ['german' => 'Hund', 'russian' => 'Собака'],
            ['german' => 'Katze', 'russian' => 'Кошка'],
            ['german' => 'Haus', 'russian' => 'Дом'],
            ['german' => 'Auto', 'russian' => 'Автомобиль'],
            ['german' => 'Baum', 'russian' => 'Дерево'],
            ['german' => 'Blume', 'russian' => 'Цветок'],
            ['german' => 'Apfel', 'russian' => 'Яблоко'],
            ['german' => 'Buch', 'russian' => 'Книга'],
            ['german' => 'Stuhl', 'russian' => 'Стул'],
            ['german' => 'Tisch', 'russian' => 'Стол'],
            ['german' => 'Fenster', 'russian' => 'Окно'],
            ['german' => 'Tür', 'russian' => 'Дверь'],
            ['german' => 'Himmel', 'russian' => 'Небо'],
            ['german' => 'Sonne', 'russian' => 'Солнце'],
            ['german' => 'Mond', 'russian' => 'Луна'],
            ['german' => 'Stern', 'russian' => 'Звезда'],
            ['german' => 'Meer', 'russian' => 'Море'],
            ['german' => 'Fluss', 'russian' => 'Река'],
            ['german' => 'Berg', 'russian' => 'Гора'],
            ['german' => 'Tal', 'russian' => 'Долина'],
            ['german' => 'Wald', 'russian' => 'Лес'],
            ['german' => 'Wiese', 'russian' => 'Луг'],
            ['german' => 'Kind', 'russian' => 'Ребенок'],
            ['german' => 'Mann', 'russian' => 'Мужчина'],
            ['german' => 'Frau', 'russian' => 'Женщина'],
            ['german' => 'Freund', 'russian' => 'Друг'],
            ['german' => 'Lehrer', 'russian' => 'Учитель'],
            ['german' => 'Schüler', 'russian' => 'Ученик'],
            ['german' => 'Schule', 'russian' => 'Школа'],
            ['german' => 'Universität', 'russian' => 'Университет'],
            ['german' => 'Arbeit', 'russian' => 'Работа'],
            ['german' => 'Büro', 'russian' => 'Офис'],
            ['german' => 'Stadt', 'russian' => 'Город'],
            ['german' => 'Dorf', 'russian' => 'Деревня'],
            ['german' => 'Land', 'russian' => 'Страна'],
            ['german' => 'Welt', 'russian' => 'Мир'],
            ['german' => 'Computer', 'russian' => 'Компьютер'],
            ['german' => 'Handy', 'russian' => 'Телефон'],
            ['german' => 'Tasche', 'russian' => 'Сумка'],
            ['german' => 'Kleidung', 'russian' => 'Одежда'],
            ['german' => 'Schuh', 'russian' => 'Туфля'],
            ['german' => 'Hemd', 'russian' => 'Рубашка'],
            ['german' => 'Hose', 'russian' => 'Брюки'],
            ['german' => 'Jacke', 'russian' => 'Куртка'],
            ['german' => 'Mantel', 'russian' => 'Пальто'],
            ['german' => 'Krawatte', 'russian' => 'Галстук'],
            ['german' => 'Gürtel', 'russian' => 'Ремень'],
            ['german' => 'Hut', 'russian' => 'Шляпа'],
            ['german' => 'Brille', 'russian' => 'Очки'],
            ['german' => 'Uhr', 'russian' => 'Часы'],
            ['german' => 'Schmuck', 'russian' => 'Украшения'],
            ['german' => 'Fahrrad', 'russian' => 'Велосипед'],
            ['german' => 'Zug', 'russian' => 'Поезд'],
            ['german' => 'Flugzeug', 'russian' => 'Самолет'],
            ['german' => 'Schiff', 'russian' => 'Корабль'],
            ['german' => 'Bus', 'russian' => 'Автобус'],
            ['german' => 'Straße', 'russian' => 'Улица'],
            ['german' => 'Brücke', 'russian' => 'Мост'],
            ['german' => 'Ampel', 'russian' => 'Светофор'],
            ['german' => 'Auto', 'russian' => 'Машина'],
            ['german' => 'Bahn', 'russian' => 'Железная дорога'],
            ['german' => 'Fahrkarte', 'russian' => 'Билет'],
            ['german' => 'Reise', 'russian' => 'Путешествие'],
            ['german' => 'Hotel', 'russian' => 'Отель'],
            ['german' => 'Restaurant', 'russian' => 'Ресторан'],
            ['german' => 'Cafe', 'russian' => 'Кафе'],
            ['german' => 'Bäckerei', 'russian' => 'Пекарня'],
            ['german' => 'Supermarkt', 'russian' => 'Супермаркет'],
            ['german' => 'Laden', 'russian' => 'Магазин'],
            ['german' => 'Bank', 'russian' => 'Банк'],
            ['german' => 'Post', 'russian' => 'Почта'],
            ['german' => 'Krankenhaus', 'russian' => 'Больница'],
            ['german' => 'Apotheke', 'russian' => 'Аптека'],
            ['german' => 'Schule', 'russian' => 'Школа'],
            ['german' => 'Universität', 'russian' => 'Университет'],
            ['german' => 'Bibliothek', 'russian' => 'Библиотека'],
            ['german' => 'Museum', 'russian' => 'Музей'],
            ['german' => 'Kino', 'russian' => 'Кинотеатр'],
            ['german' => 'Theater', 'russian' => 'Театр'],
            ['german' => 'Zoo', 'russian' => 'Зоопарк'],
            ['german' => 'Park', 'russian' => 'Парк'],
            ['german' => 'Spielplatz', 'russian' => 'Игровая площадка'],
            ['german' => 'Schwimmbad', 'russian' => 'Бассейн'],
            ['german' => 'Sportplatz', 'russian' => 'Спортивная площадка'],
            ['german' => 'Stadion', 'russian' => 'Стадион'],
            ['german' => 'Bibliothek', 'russian' => 'Библиотека'],
            ['german' => 'Museum', 'russian' => 'Музей'],
            ['german' => 'Kino', 'russian' => 'Кинотеатр'],
            ['german' => 'Theater', 'russian' => 'Театр'],
            ['german' => 'Zoo', 'russian' => 'Зоопарк'],
            ['german' => 'Park', 'russian' => 'Парк'],
            ['german' => 'Spielplatz', 'russian' => 'Игровая площадка'],
            ['german' => 'Schwimmbad', 'russian' => 'Бассейн'],
            ['german' => 'Sportplatz', 'russian' => 'Спортивная площадка'],
            ['german' => 'Stadion', 'russian' => 'Стадион']
        ];

        foreach ($words as $word) {
            Word::firstOrCreate($word);
        }
    }
}
