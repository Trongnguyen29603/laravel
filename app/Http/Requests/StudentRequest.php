<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rule = [];
        //laays ra cas phuwong thuwcs ddang hoajt ddoongj 
        $currdentAction = $this->route()->getActionMethod();
       switch($this->method()):
        case 'POST':
            switch($currdentAction): 
                case 'add':
                
                      $rule = [
                        // "email"=> "required|email|unique:students",
                        "email"=>"required",
                        "name"=>"required"
                      ];
                      break;
                    endswitch;
                
                    endswitch;   
       return $rule;

       
      
    }
    public function messages()
       {
        return[
            "email.required"=> 'bawts buoojc phai banwgf email',
            "name.required"=>"bắt buộc phải nhậm name ",
            "email.unique"=>"email ko được trùng"
        ];
       }
}
