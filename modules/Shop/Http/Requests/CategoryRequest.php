<?php

namespace Modules\Shop\Http\Requests;

use Modules\Core\Http\Requests\BaseRequest;

class CategoryRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
                {
                    return [
                        // CREATE ROLES
                    ];
                }
            // UPDATE
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        // UPDATE ROLES
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
}
