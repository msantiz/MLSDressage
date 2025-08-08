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

            'firstname' => 'required|max:100|string|regex:/^[A-Za-z\s\-\']+$/',

             //'lastname' => 'max:255|string',

             'email' => 'required|max:255|email',

             'phone' => 'nullable|string|max:|regex:/^[0-9+\-\s()]*$/',

             'message' => 'required|max:1000|string',

         ];

    }

}