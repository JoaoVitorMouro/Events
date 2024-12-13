<?php


namespace App\Repositories;


use App\Models\MessageTemplate;

class MessageTemplateRepository
{
    public function get()
    {
        return MessageTemplate::all();
    }

    public function store($data)
    {
        return MessageTemplate::create($data);
    }

    public function details($id)
    {
        return MessageTemplate::find($id);
    }

    public function update($id, $data)
    {
        $MessageTemplate = MessageTemplate::find($id);
        if ($MessageTemplate) {
            $MessageTemplate->update($data);
            return $MessageTemplate;
        }
        return null;
    }

    public function destroy($id)
    {
        $MessageTemplate = MessageTemplate::find($id);
        if ($MessageTemplate) {
            $MessageTemplate->delete();
            return $MessageTemplate;
        }
        return null;
    }

}
