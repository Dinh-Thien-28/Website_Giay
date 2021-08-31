<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserFormRequest extends FormRequest
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
        $formRules = [
            "name"=>[
                "required",
                Rule::unique('categories')->ignore($this->id)
            ],
            $formRules['file_upload'] = [
                "mimes:jpg,bmp,png"
            ],
            'email' => [
                "required",
                "email",
                function($attribute, $value, $fail){
                    if(!strpos($value, "@fpt.edu.vn")){
                        $fail("$attribute phải là đuôi @fpt.edu.vn");
                    }
                }
            ],
            'password' => "required",
            

        ];
        if($this->id == null ){
            $formRules['file_upload'][]="required";
        }
        return $formRules;
    }
}
