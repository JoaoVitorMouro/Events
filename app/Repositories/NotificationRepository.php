<?php


namespace App\Repositories;


use App\Models\Notification;

class NotificationRepository
{
    public function get()
    {
        return Notification::all();
    }

    public function store($data)
    {
        return Notification::create($data);
    }

    public function details($id)
    {
        return Notification::find($id);
    }

    public function update($id, $data)
    {
        $Notification = Notification::find($id);
        if ($Notification) {
            $Notification->update($data);
            return $Notification;
        }
        return null;
    }

    public function destroy($id)
    {
        $Notification = Notification::find($id);
        if ($Notification) {
            $Notification->delete();
            return $Notification;
        }
        return null;
    }

}
