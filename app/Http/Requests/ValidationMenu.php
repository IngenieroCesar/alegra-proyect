<?php

namespace App\Http\Requests;

use App\Rules\ValidateFieldUrl;
use Illuminate\Foundation\Http\FormRequest;

class ValidationMenu extends FormRequest
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
            'name' => 'required|string|max:50|unique:menu,name,'. $this->route('id'),
            'url' => ['required','string','max:50', new ValidateFieldUrl],
        ];
    }


}
