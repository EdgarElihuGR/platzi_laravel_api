<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\V1\PostResource as PostResourcev1;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public $collects = PostResourcev1::class;

    public function toArray($request)
    {
        return [
            'count' => count($this->collection),
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Redlus',
                'authors' => [
                    'Elihu García',
                    'Redlus'
                ]
            ],
            'type' => 'articles'
        ];
    }
}
