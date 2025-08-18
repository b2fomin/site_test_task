<?php

namespace App\Services\API;

use App\Http\Filters\JobFilter;
use App\Models\API\Job;

class JobService
{
    public function store(array $data) {
        Job::create($data);
    }

    public function update(array $data) {
        $job = Job::findOrFail($data['id']);
        $job->update($data);
    }

    public function delete(array $data) {
        Job::findOrFail($data['id'])->delete();
    }

    public function filter(array $query_params) {
        $filter = app()->make(JobFilter::class, ['queryParams' => $query_params]);
        return Job::filter($filter);
    }
}
