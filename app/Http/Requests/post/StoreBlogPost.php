<?php

namespace App\Http\Requests\post;

use App\Http\Requests\BaseRequest;

class StoreBlogPost extends BaseRequest
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
		    'title' => 'required|max:255',
		    'body' => 'required',
	    ];
    }
	
	public function messages()
	{
		$message = [
			'title.required'      =>'标题必须填写',
			'title.max'      =>'不够大!',
			'body.required'      =>'内容必须填写!'
		];
		return $message;
	}
}
