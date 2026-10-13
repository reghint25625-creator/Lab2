<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryRequest; // Импортируем наш класс запроса

class SiteController extends Controller
{
    // Показать страницу услуг с формой
    public function services()
    {
        return view('services');
    }

    // Обработка формы с использованием EntryRequest
    public function storeService(EntryRequest $request)
    {
        // Данные уже прошли валидацию правила из EntryRequest!
        // Получаем проверенные данные:
        $validated = $request->validated();

        // Передаем их на страницу успеха
        return view('services-success', $validated);
    }
}
