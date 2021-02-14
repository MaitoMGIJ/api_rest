<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    public $collects = PostResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'meta' => [
                'organization' => '3IG',
                'authors' => [
                    'Italomoralesf',
                    'Platzi',
                    'MaitoMGIJ'
                ]
            ],
            'type' => 'articles',
            'data' => $this->collection,
        ];
    }
}
