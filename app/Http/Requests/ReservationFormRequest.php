<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'form_data_start' => 'required|date',
            'form_data_end' => 'required|date|after:form_data_start',
            'form_room_type' => 'required|integer',
            'form_adult_count' => 'required|integer',
            'form_child_count' => 'required|integer',
            'form_kid_count' => 'required|integer',
            'form_name' => 'required',
            'form_email' => 'required',
            'form_phone' => 'required',
            'form_message' => '',
            'form_food' => '',
        ];
    }

    public function messages()
    {
        return [
            'form_data_start.required' => 'To pole jest wymagane',
            'form_data_end.required' => 'To pole jest wymagane',
            'form_data_end.after' => 'Data musi być późniejsza niż Data przyjazdu',
            'form_room_type.integer' => 'Wybierz pokój lub domek',
        ];
    }
}
