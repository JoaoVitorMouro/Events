<?php


namespace App\Services;


use App\Models\Item;
use App\Repositories\NotificationRepository;

class NotificationService
{
    private $NotificationRepository;

    public function __construct(NotificationRepository $NotificationRepository)
    {
        $this->NotificationRepository = $NotificationRepository;

    }

    public function get()
    {
        return $this->NotificationRepository->get();
    }

    public function store($data)
    {
        return $this->NotificationRepository->store($data);
    }

    public function details($id)
    {
        return $this->NotificationRepository->details($id);
    }

    public function update($id, $data)
    {
        return $this->NotificationRepository->update($id, $data);
    }

    public function destroy($id)
    {
        return $this->NotificationRepository->destroy($id);
    }

}
