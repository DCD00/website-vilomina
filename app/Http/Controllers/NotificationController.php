<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Notification;
// use App\Http\Controller;

class NotificationController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $notifications = $user->notifications()->paginate(10);

        return view('dashboard.notification.index', compact('notifications'));
    }

    public function markAsRead()
    {
        $this->read = true;
        $this->save();
    }

    public function markAsUnread()
    {
        $this->read = false;
        $this->save();
    }

    public function destroy(Notification $notification)
    {
        $this->authorize('delete', $notification);
        
        $notification->delete();

        return redirect('/dashboard/notification')->with('success', 'Notification Has Been Delete!');
    }
}
