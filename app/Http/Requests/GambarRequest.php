<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GambarRequest extends FormRequest
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
            //
            'produk_id'=>'required',
            'foto-1'=>'file|image|max:2048',
            'foto-2'=>'file|image|max:2048',
            'foto-3'=>'file|image|max:2048',
            'foto-4'=>'file|image|max:2048',
            'foto-5'=>'file|image|max:2048',
        ];
    }
}
