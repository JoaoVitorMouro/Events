<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageTemplateRequest;
use App\Http\Requests\MessageTemplateUpdateRequest;
use App\Http\Resources\MessageTemplateResource;
use App\Services\MessageTemplateService;

class MessageTemplateController extends Controller
{
    private $MessageTemplateService;

    public function __construct(MessageTemplateService $MessageTemplateService)
    {
        $this->MessageTemplateService = $MessageTemplateService;
    }

    public function get()
    {
        $MessageTemplates = $this->MessageTemplateService->get();

        return MessageTemplateResource::collection($MessageTemplates);
    }

    public function store(MessageTemplateRequest $request)
    {
        $data = $request->validated();
        $MessageTemplate = $this->MessageTemplateService->store($data);

        return new MessageTemplateResource($MessageTemplate);
    }

    public function details($id)
    {
        $MessageTemplate = $this->MessageTemplateService->details($id);

        if ($MessageTemplate) {
            return new MessageTemplateResource($MessageTemplate);
        }
        return response()->json([
            "message" => "MessageTemplate nao encotrado",
        ], 404);
    }

    public function update(MessageTemplateUpdateRequest $request, $id)
    {
        $data = $request->validated();
        $MessageTemplate = $this->MessageTemplateService->update($id, $data);
        if ($MessageTemplate) {
            return new MessageTemplateResource($MessageTemplate);
        }

        return response()->json([
            "message" => "MessageTemplate nao encotrado",
        ], 404);
    }

    public function destroy($id)
    {
        $MessageTemplate = $this->MessageTemplateService->destroy($id);
        if ($MessageTemplate) {
            return new MessageTemplateResource($MessageTemplate);
        }

        return response()->json([
            "message" => "MessageTemplate nao encotrado",
        ], 404);
    }
}
