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

            'firstname' => ['required','string','max:100','regex:/^[A-Za-z\s\-\']+$/'],

             'email' => ['required','email:rfc,dns','max:255'],

             'phone' => ['nullable','string','max:30','regex:/^[0-9+\-\s()]*$/'],

             'message' => ['required','string','max:1000'],

         ];

    }

}