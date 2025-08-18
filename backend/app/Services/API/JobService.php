<?php

namespace App\Services\API;

use App\Models\Job;

class JobService
{
    public function store(array $data) {
        Job::create($data);
    }

    public function update(array $data) {
        $job = Job::findOrFail($data['id']);
    }
}
