<?php

namespace App\Http\Resources\API\Project;

use App\Helpers\PaginationHelper;
use App\Http\Filters\ProjectFilter;
use App\Models\API\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'code' => $this['code'],
            'name' => $this['name'],
            'icon' => $this['icon'],
            'description' => $this['description'],
            'contractor' => $this['contractor'],
            'address' => $this['address'],
            'date_start' => $this['date_start'],
            'date_end' => $this['date_end'],
            'budget' => $this['budget']
        ];
    }
}
