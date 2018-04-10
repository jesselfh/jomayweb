<?php

namespace App\Http\Requests;

class RecruitRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'position' => 'required|between:2,20',
                    'recruit_count' => 'required|numeric',
                    'requirement' => 'required|min:3',
                ];
            }

            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
            'position.between' => '职位必须介于2~20个字符之间',
            'requirement.min' => '职位要求必须至少3个字符',
        ];
    }
}
