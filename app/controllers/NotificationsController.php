<?php

class NotificationsController extends \BaseController {



    public static function index()
    {
        $notify =	Notification::where('flat_id','=', Auth::user()->flat_id)
            ->where('is_read', '=', 0)
            ->orWhere('user_id','=', Auth::user()->id)
            ->orWhere('user_id','=', Null)->get();

        return View::make('notifications.index')
            ->with('title', 'View All Notification')
            ->with('notify', $notify);
    }


}