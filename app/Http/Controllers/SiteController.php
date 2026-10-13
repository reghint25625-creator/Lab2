<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EntryRequest; //імпорт реквесту

class SiteController extends Controller
{
    //Метод з кейс 0 / кейс 1
    public function say(string $message = 'Привіт')
    {
        return view('site.say', ['message' => $message]);
    }

    //Метод з кейс 3
    public function entry()
    {
        return view('site.entry');
    }
    public function entryStore(EntryRequest $request)
    {
        return view('site.entry-confirm', $request->validated());
    }
}
