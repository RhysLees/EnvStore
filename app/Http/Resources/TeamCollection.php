<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TeamCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($team) {
            return [
                'id' => $team->id,
                'name' => $team->name,
                'personal_team' => $team->personal_team,
                'owner_id' => $team->owner_id,
                'created_at' => $team->created_at,
                'updated_at' => $team->updated_at,
            ];
        });
    }
}
