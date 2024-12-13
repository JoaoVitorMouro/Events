<?php


namespace App\Services;


use App\Models\Event;
use App\Repositories\EventRepository;
use App\Repositories\EventTypeRepository;

class EventService
{
    private $EventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->EventRepository = $eventRepository;

    }

    public function get()
    {
        return $this->EventRepository->get();
    }

    public function store($data)
    {
        return $this->EventRepository->store($data);
    }

    public function details($id)
    {
        return $this->EventRepository->details($id);
    }

    public function update($id, $data)
    {
        return $this->EventRepository->update($id, $data);
    }

    public function destroy($id)
    {
        return $this->EventRepository->destroy($id);
    }

}
