<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\API\JobService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected JobService $service;
    public final function __construct(JobService $service) {
        $this->service = $service;
    }
}
