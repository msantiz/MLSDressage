<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest {

/** * Determine if the user is authorized to make this request. * * @return bool */

public function authorize() {

        return true;

}



/** * Get the validation rules that apply to the request. * * @return array */

public function rules() {

       return [

            'firstname' => 'required|max:25|string',

             //'lastname' => 'max:255|string',

             'email' => 'required|max:30|email',

             'phone' => 'numeric|nullable',

             'message' => 'required|max:200|string',

         ];

    }

}