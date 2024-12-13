<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Http\Resources\EventDetailsResource;
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
        $events = $this->EventService->get();

        return EventResource::collection($events);
    }

    public function store(EventRequest $request)
    {
        $data = $request->validated();
        $event = $this->EventService->store($data);

        return new EventResource($event);
    }

    public function details($id)
    {
        $event = $this->EventService->details($id);

        if ($event) {
            return new EventDetailsResource($event);
        }
        return response()->json([
            "message" => "event nao encotrado",
        ], 404);
    }

    public function update(EventUpdateRequest $request, $id)
    {
        $data = $request->validated();
        $event = $this->EventService->update($id, $data);
        if ($event) {
            return new EventResource($event);
        }

        return response()->json([
            "message" => "event nao encotrado",
        ], 404);
    }

    public function destroy($id)
    {
        $event = $this->EventService->destroy($id);
        if ($event) {
            return new EventResource($event);
        }

        return response()->json([
            "message" => "event nao encotrado",
        ], 404);
    }
}
