<?php

namespace App\Http\Controllers\API;

use App\Helpers\PaginationHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\Project\DestroyRequest;
use App\Http\Requests\API\Project\IndexRequest;
use App\Http\Requests\API\Project\StoreRequest;
use App\Http\Requests\API\Project\UpdateRequest;
use App\Http\Resources\API\Project\IndexResource;
use App\Http\Resources\API\SuccessResource;
use App\Services\API\JobService;

class ProjectController extends Controller
{
    protected JobService $service;
    public final function __construct(JobService $service) {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $data = $request->validated();
        $page = $per_page = 1;
        if (isset($data['page'])) {
            $page = $data['page'];
            unset($data['page']);
        }

        if (isset($data['per_page'])) {
            $per_page = $data['per_page'];
            unset($data['per_page']);
        }
        $jobs = PaginationHelper::paginate($this->service->filter(array_filter($data)), $per_page, $page);

        return IndexResource::collection($jobs);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(array $data)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $data = $request->validated();
            $this->service->store($data);
        } catch (\Exception $e) {
            return new SuccessResource(['err_msg' => $e->getMessage()]);
        }
        return new SuccessResource([]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request)
    {
        try {
            $data = $request->validated();
            $this->service->update($data);
        } catch (\Exception $e) {
            return new SuccessResource(['err_msg' => $e->getMessage()]);
        }
        return new SuccessResource([]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyRequest $request)
    {
        try {
            $data = $request->validated();
            $this->service->delete($data);
        } catch (\Exception $e) {
            return new SuccessResource(['err_msg' => $e->getMessage()]);
        }
        return new SuccessResource([]);
    }
}
