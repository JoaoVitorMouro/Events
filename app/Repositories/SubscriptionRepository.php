<?php


namespace App\Repositories;


use App\Models\Subscription;

class SubscriptionRepository
{
    public function get()
    {
        return Subscription::all();
    }

    public function store($data)
    {
        return Subscription::create($data);
    }

    public function details($id)
    {
        return Subscription::find($id);
    }


    public function destroy($id)
    {
        $Subscription = Subscription::find($id);
        if ($Subscription) {
            $Subscription->delete();
            return $Subscription;
        }
        return null;
    }

}
