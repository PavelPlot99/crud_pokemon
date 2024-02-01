<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreAbilityRequest;
use App\Http\Resources\Api\IndexAbilityResource;
use App\Service\AbilityService;
use Illuminate\Http\Request;

class AbilityController extends Controller
{
    public function store(StoreAbilityRequest $request, AbilityService $service)
    {
        return IndexAbilityResource::make($service->storeAbility($request->all()));
    }
}
