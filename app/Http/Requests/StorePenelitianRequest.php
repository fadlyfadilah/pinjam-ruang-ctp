<?php

namespace App\Http\Requests;

use App\Models\Penelitian;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePenelitianRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('penelitian_create');
    }

    public function rules()
    {
        return [
            'nama' => [
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
            'univ' => [
                'string',
                'required',
            ],
            'lama' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'sampai' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'judul' => [
                'string',
                'required',
            ],
        ];
    }
}