<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function  __invoke($id){

        $notification = Notification::findOrFail($id);
        // dd($notification);
        $notification->read_at = now();
        $notification->save();

        return back();
    }
}
