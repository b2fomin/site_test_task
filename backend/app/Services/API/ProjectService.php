<?php

namespace App\Services\API;

use App\Http\Filters\ProjectFilter;
use App\Models\API\Project;

class ProjectService
{
    public function store(array $data) {
        Project::create($data);
    }

    public function update(array $data) {
        $job = Project::findOrFail($data['id']);
        $job->update($data);
    }

    public function delete(array $data) {
        $project = Project::findOrFail($data['id']);
        $project->blocks()->delete();
        $project->rooms()->delete();
        $project->jobs()->delete();
        $project->delete();
    }

    public function filter(array $query_params) {
        $filter = app()->make(ProjectFilter::class, ['queryParams' => $query_params]);
        return Project::filter($filter);
    }
}
