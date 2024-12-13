<?php


namespace App\Services;


use App\Models\Subscription;
use App\Repositories\SubscriptionRepository;
use App\Repositories\SubscriptionTypeRepository;

class SubscriptionService
{
    private $SubscriptionRepository;

    public function __construct(SubscriptionRepository $SubscriptionRepository)
    {
        $this->SubscriptionRepository = $SubscriptionRepository;

    }

    public function get()
    {
        return $this->SubscriptionRepository->get();
    }

    public function store($data)
    {
        return $this->SubscriptionRepository->store($data);
    }

    public function details($id)
    {
        return $this->SubscriptionRepository->details($id);
    }

    public function destroy($id)
    {
        return $this->SubscriptionRepository->destroy($id);
    }

}
