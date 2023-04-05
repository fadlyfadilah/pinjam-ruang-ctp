<?php

namespace App\Http\Requests;

use App\Models\Kp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateKpRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('kp_edit');
    }

    public function rules()
    {
        return [
            'nama' => [
                'string',
                'required',
            ],
            'univ' => [
                'string',
                'required',
            ],
            'no_hp' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
            ],
            'lama' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}