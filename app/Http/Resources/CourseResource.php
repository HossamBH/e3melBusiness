<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'description'=>$this->description,
            'rating'=>$this->rating,
            'levels'=>$this->levels,
            'hours'=>$this->hours,
            'views'=>$this->views,
            'category'=> new CategoryResource($this->whenLoaded('category'))
        ];
    }
}
