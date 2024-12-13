<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Http\Requests\SubscriptionUpdateRequest;
use App\Http\Resources\SubscriptionResource;
use App\Services\SubscriptionService;

class SubscriptionController extends Controller
{
    private $SubscriptionService;

    public function __construct(SubscriptionService $SubscriptionService)
    {
        $this->SubscriptionService = $SubscriptionService;
    }

    public function get()
    {
        $Subscriptions = $this->SubscriptionService->get();

        return SubscriptionResource::collection($Subscriptions);
    }

    public function store(SubscriptionRequest $request)
    {
        $data = $request->validated();
        $Subscription = $this->SubscriptionService->store($data);

        return new SubscriptionResource($Subscription);
    }

    public function details($id)
    {
        $Subscription = $this->SubscriptionService->details($id);

        if ($Subscription) {
            return new SubscriptionResource($Subscription);
        }
        return response()->json([
            "message" => "Subscription nao encotrado",
        ], 404);
    }


    public function destroy($id)
    {
        $Subscription = $this->SubscriptionService->destroy($id);
        if ($Subscription) {
            return new SubscriptionResource($Subscription);
        }

        return response()->json([
            "message" => "Subscription nao encotrado",
        ], 404);
    }
}
