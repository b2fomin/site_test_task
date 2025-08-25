<?php

namespace App\Http\Resources\API\Job;

use App\Helpers\PaginationHelper;
use App\Http\Filters\JobFilter;
use App\Models\API\Job;
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
            'block' => $this['block'],
            'project' => $this['project'],
            'floor' => $this['floor'],
            'room' => $this['room'],
            'task' => $this['task'],
            'category' => $this['category'],
            'task_id' => $this['task_id'],
            'executor' => $this['executor'],
            'date_start' => $this['date_start'],
            'date_end' => $this['date_end'],
            'status' => $this['status']
        ];
    }
}
