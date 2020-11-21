<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function __construct()
    {       
        $this->middleware('auth');
    }

    public function show()
    {
        $readNotifications = auth()->user()->readNotifications;
        $unreadNotifications = tap(auth()->user()->unreadNotifications)->markAsRead();

        return view('notifications.show', [
            'unreadNotifications' => $unreadNotifications,
            'readNotifications' => $readNotifications
        ]);
    }
}
