<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class News extends JsonResource
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
        'id'=> "Запись №_$this->id",
        'title'=> $this->title,
        'content'=> $this->content,
        'publish_date'=> $this->publish_date
      ];
    }
}
