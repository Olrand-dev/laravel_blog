<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $sortTypesMap = [
        'date' => 'created_at',
    ];


    protected function parseSortType(string $type) : array 
    {
        $parts = explode('_', $type);
        return [
            'field' => $this->sortTypesMap[$parts[0]],
            'direction' => $parts[1],
        ];
    }


    protected function apiResponse(
        string $status = 'success', 
        array $messages = [], 
        array $data = []
    )
    {
        return [
            'status' => $status,
            'messages' => $messages,
            'data' => $data,
        ];
    }
    
}
