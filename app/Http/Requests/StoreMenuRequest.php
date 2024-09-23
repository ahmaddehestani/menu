<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuRequest extends FormRequest
{

    public function rules(): array
    {
        return
            [
            'title'=>['required','string','max:255'],
            'description'=>['required','string','max:255'],
            'position'=>['required','string','max:255'],
            'type'=>['required','string','max:255'],
            'delete_able'=>['boolean','nullable'],
            'published'=>['boolean','nullable']
        ];

    }
}
