<?php

use App\Http\Controllers\SentenceController;
use App\Http\Controllers\WordController;
use App\Models\Word;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('loads the words index page', function () {
    // Создаем тестовые данные
    Word::factory()->create(['german' => 'Haus', 'russian' => 'Дом']);
    Word::factory()->create(['german' => 'Auto', 'russian' => 'Автомобиль']);
    Word::factory()->create(['german' => 'Baum', 'russian' => 'Дерево']);
    Word::factory()->create(['german' => 'Blume', 'russian' => 'Цветок']);

    // Выполняем запрос на страницу со словами
    $response = $this->get('http://127.0.0.1:8000/words');

    // Проверяем, что страница загружается успешно
    $response->assertStatus(200);

    // Проверяем, что на странице отображается слово "Haus"
    $response->assertSee('Дом');
});
