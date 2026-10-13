@extends('layouts.app')

@section('title', 'Послуги — Запис на ремонт')

@section('content')
    <div style="background-color: white; width: 100%; max-width: 800px; padding: 35px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); border-left: 5px solid #1f8135;">
        <h1 style="color: #0a3622; margin-top: 0; font-size: 26px;">Запис на обслуговування та ремонт</h1>
        <p style="color: #555; margin-bottom: 20px;">Заповніть форму, щоб обрати зручний час.</p>

        <form action="{{ route('services.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf

            <div>
                <label style="display: block; font-weight: bold; margin-bottom: 5px; color: #333;">Ваше ім'я:</label>
                <input type="text" name="client_name" value="{{ old('client_name') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                @error('client_name') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div>
                <label style="display: block; font-weight: bold; margin-bottom: 5px; color: #333;">Марка та модель авто:</label>
                <input type="text" name="car_model" value="{{ old('car_model') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                @error('car_model') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div>
                <label style="display: block; font-weight: bold; margin-bottom: 5px; color: #333;">Вид послуги:</label>
                <select name="service_type" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                    <option value="Комп'ютерна діагностика">Комп'ютерна діагностика</option>
                    <option value="Заміна мастила та фільтрів">Заміна мастила та фільтрів</option>
                    <option value="Ремонт підвіски / ходової">Ремонт підвіски / ходової</option>
                </select>
            </div>

            <div>
                <label style="display: block; font-weight: bold; margin-bottom: 5px; color: #333;">Бажана дата та час візиту:</label>
                <input type="datetime-local" name="booking_time" value="{{ old('booking_time') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                @error('booking_time') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div>
                <label style="display: block; font-weight: bold; margin-bottom: 5px; color: #333;">Примітки:</label>
                <textarea name="notes" rows="3" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></textarea>
            </div>

            <button type="submit" style="background-color: #1f8135; color: white; padding: 12px 20px; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; font-size: 16px;">
                Надіслати заявку
            </button>
        </form>
    </div>
@endsection
