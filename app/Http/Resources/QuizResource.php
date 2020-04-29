<?php

namespace App\Http\Resources;

use App\Quiz;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizResource extends JsonResource
{
    /**
     * @var Quiz $quiz
     */
    public $resource;
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'uuid' => $this->resource->uuid,
            'title' => $this->resource->title,
            'rounds' => RoundResource::collection($this->resource->rounds),
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
