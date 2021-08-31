<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductFormRequest extends FormRequest
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
                Rule::unique('products')->ignore($this->id)
            ],
            $formRules['file_upload'] = [
                "mimes:jpg,bmp,png"
            ],
            "price"=>[
                "numeric",
                "min:0"
            ],
            "sale_price"=>[
                "numeric",
                "lte:price"
            ],
            "quantity"=>[
                "numeric",
                "min:0"
            ],
            "pro_desc"=>[
                "required",
            ],
            "short_desc"=>[
                "required",
            ],
            "specification"=>[
                "required",
            ],

        ];

        if($this->id == null ){
            $formRules['file_upload'][]="required";
        }
        return $formRules;
    }

    // public function messages()
    // {
    //     return
    // }
}
