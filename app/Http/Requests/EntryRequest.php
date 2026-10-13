<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Разрешаем выполнение запроса
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'client_name'  => 'required|string|max:255',
            'car_model'    => 'required|string|max:255',
            'service_type' => 'required|string',
            'booking_time' => 'required|date',
            'notes'        => 'nullable|string',
        ];
    }

    /**
     * Custom error messages in Ukrainian.
     */
    public function messages(): array
    {
        return [
            'client_name.required'  => 'Будь ласка, введіть ваше ім\'я.',
            'car_model.required'    => 'Будь ласка, вкажіть модель автомобіля.',
            'service_type.required' => 'Оберіть вид послуги.',
            'booking_time.required' => 'Будь ласка, оберіть бажаний час візиту.',
        ];
    }
}
