<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class SentenceRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
                {
                    return [
                        'id' => ['required,exists:shop_user,id']
                    ];
                }
            case 'POST':
                {
                    return [
                        'name' => ['required', 'max:12', 'unique:users,name'],
                        'password' => ['required', 'max:16', 'min:6']
                    ];
                }
            case 'PUT':
            case 'PATCH':
            case 'DELETE':
            default:
                {
                    return [

                    ];
                }
        }
    }
}
