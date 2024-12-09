<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemStoreRequest;
use App\Http\Requests\ItemUpdateRequest;
use App\Http\Resources\EventResource;
use App\Services\EventService;

class EventController extends Controller
{
    private $EventService;

    public function __construct(EventService $EventService)
    {
        $this->EventService = $EventService;
    }

    public function get()
    {
        $items = $this->EventService->get();

        return EventResource::collection($items);
    }

    public function store(ItemStoreRequest $request)
    {
        $data = $request->validated();
        $item = $this->EventService->store($data);

        return new EventResource($item);
    }

    public function details($id)
    {
        $item = $this->EventService->details($id);

        if ($item) {
            return new EventResource($item);
        }
        return response()->json([
            "message" => "Item nao encotrado",
        ], 404);
    }

    public function update(ItemUpdateRequest $request, $id)
    {
        $data = $request->validated();
        $item = $this->EventService->update($id, $data);
        if ($item) {
            return new EventResource($item);
        }

        return response()->json([
            "message" => "Item nao encotrado",
        ], 404);
    }

    public function destroy($id)
    {
        $item = $this->EventService->destroy($id);
        if ($item) {
            return new EventResource($item);
        }

        return response()->json([
            "message" => "Item nao encotrado",
        ], 404);
    }
}
