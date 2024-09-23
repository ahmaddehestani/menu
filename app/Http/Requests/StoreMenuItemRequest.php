<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuItemRequest extends FormRequest
{protected function prepareForValidation(): void
{
    $this->merge([
        'parent_id' => $this->parent_id==0?null:$this->parent_id,
    ]);
}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'menu_id'=>['required','exists:menus,id'],
            'parent_id'=>['nullable'],
            'title'=>['required','string','max:255'],
            'description'=>['nullable','string'],
            'slug'=>['nullable','string'],
            'image'=>['nullable','string'],
            'url'=>['nullable','string'],
            'order'=>['numeric']
        ];
    }
}
