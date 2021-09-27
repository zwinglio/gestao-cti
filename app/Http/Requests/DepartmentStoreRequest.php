<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'          => ['required'],
            'responsible'   => ['required'],
            'email'         => ['required'],
            'ramal'         => ['sometimes'],
            'type'          => ['required'],
            'notes'         => ['sometimes']
        ];
    }
}
