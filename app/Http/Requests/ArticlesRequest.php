<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticlesRequest extends Request
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
            'title' => 'required|max:50',
            'published_at' => 'required',
            'excerpt' => 'required|max:500',
            'body' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title for article is required',
            'title.max' => 'Max length for title is :max character',
            'published_at.required' => 'Date of published is required',
            'excerpt.required' => 'Excerpt is required',
            'excerpt.max' => 'Max length for excerpt is :max character',
            'body.required' => 'Body for article is required',
        ];
    }
}
