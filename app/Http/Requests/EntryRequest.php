<?php

namespace App\Http\Requests;

use App\Enums\CarModel;
use App\Enums\ServiceType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class EntryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'client_name'  => 'required|string|max:255',
            'car_model'    => ['required', new Enum(CarModel::class)],
            'service_type' => ['required', new Enum(ServiceType::class)],
            'booking_time' => 'required|date',
            'notes'        => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'client_name.required'  => 'Будь ласка, введіть ваше ім\'я.',
            'car_model.required'    => 'Будь ласка, оберіть марку авто.',
            'service_type.required' => 'Будь ласка, оберіть вид послуги.',
            'booking_time.required' => 'Будь ласка, оберіть бажаний час візиту.',
        ];
    }
}
