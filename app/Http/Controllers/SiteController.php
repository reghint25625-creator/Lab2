<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryRequest;

class SiteController extends Controller
{
    // Показати сторінку з формою запису на ремонт
    public function repairForm()
    {
        return view('services');
    }

    // Обробка та валідація заявки через EntryRequest
    public function storeRepair(EntryRequest $request)
    {
        $validated = $request->validated();

        return view('services-success', $validated);
    }
}
