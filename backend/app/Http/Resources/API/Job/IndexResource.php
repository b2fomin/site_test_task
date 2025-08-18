<?php

namespace App\Http\Resources\API\Job;

use App\Http\Filters\JobFilter;
use App\Models\Job;
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
        $query = $request->query;

        $page = $query->get('page');
        $per_page = $query->get('per_page');

        $filter = app()->make(JobFilter::class, ['queryParams' => $query->all()]);

        $filtered_operations = Job::filter($filter)->paginate($per_page, ['*'], 'page', $page);

        return [
            'id' => $this->id,
            'pages_num' => $filtered_operations->lastPage(),
            'name' => $this->name,
            'project' => $this->project,
            'floor' => $this->floor,
            'object' => $this->object,
            'executor' => $this->executor,
            'period' => $this->period,
            'status' => $this->status
        ];
    }
}
