<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class posts extends JsonResource
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
            'id' =>$this->id,
            'user_id' =>$this->user_id,
            'title' =>$this->title,
            'slug' =>$this->slug,
            'image' =>$this->image,
            'body' =>$this->body,
            'view_count'=>$this->view_count,
            'status'=>$this->status,
            'is_approved'=>$this->is_approved,

        ];
    }
}
