<?php

namespace App\Http\Resources\v2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * EN la linea collects se usa cuando el recurso no esta en la misma carpeta
     * Laravel por defecto trae los recusrso en su misma carpeta
     */
    public $collects = PostResource::class;

    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Platzi',
                'authors' => [
                    'Camilo',
                    'platzi',
                ],
            ],
            'type' => 'articles',
        ];
    }
}
