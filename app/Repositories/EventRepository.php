<?php


namespace App\Repositories;


use App\Models\Event;

class EventRepository
{
    public function get()
    {
        return Event::all();
    }

    public function store($data)
    {
        return Event::create($data);
    }

    public function details($id)
    {
        return Event::find($id);
    }

    public function update($id, $data)
    {
        $Event = Event::find($id);
        if ($Event) {
            $Event->update($data);
            return $Event;
        }
        return null;
    }

    public function destroy($id)
    {
        $Event = Event::find($id);
        if ($Event) {
            $Event->delete();
            return $Event;
        }
        return null;
    }

}
