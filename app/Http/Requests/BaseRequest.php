<?php

namespace App\Http\Requests;


namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{
	protected function failedValidation(Validator $validator) {
		$error= $validator->errors()->all();
		throw new HttpResponseException(response()->json(['msg'=>'error','code'=>'500','data'=>$error[0]], 500));
	}
}
