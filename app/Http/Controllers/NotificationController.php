<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotificationStoreRequest;
use App\Http\Requests\NotificationUpdateRequest;
use App\Http\Resources\NotificationDetailsResource;
use App\Http\Resources\NotificationResource;
use App\Jobs\NotificationAcceptedJob;
use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    private $NotificationService;

    public function __construct(NotificationService $NotificationService)
    {
        $this->NotificationService = $NotificationService;
    }

    public function get()
    {
        $items = $this->NotificationService->get();

        return NotificationResource::collection($items);
    }

    public function store(NotificationStoreRequest $request)
    {
        $data = $request->validated();
        $item = $this->NotificationService->store($data);

        NotificationAcceptedJob::dispatch($item->id);

        return new NotificationResource($item);
    }

    public function details($id)
    {
        $item = $this->NotificationService->details($id);

        if ($item) {
            return new NotificationDetailsResource($item);
        }
        return response()->json([
            "message" => "Tipo de Item nao encotrado",
        ], 404);
    }

    public function update(NotificationUpdateRequest $request, $id)
    {
        $data = $request->validated();
        $item = $this->NotificationService->update($id, $data);
        if ($item) {
            return new NotificationResource($item);
        }

        return response()->json([
            "message" => "Tipo de Item nao encotrado",
        ], 404);
    }

    public function destroy($id)
    {
        $item = $this->NotificationService->destroy($id);
        if ($item) {
            return new NotificationResource($item);
        }

        return response()->json([
            "message" => "Tipo de Item nao encotrado",
        ], 404);
    }
}
