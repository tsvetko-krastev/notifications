<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Render the notifications view
     */
    public function index()
    {
        $notifications = Notification::all();

        return view('notifications', compact ('notifications'));
    }
}
