<?php

class NotificationsController extends \BaseController {



    public static function admin()
    {
        $notify =Notification::where('type','=','manager_request')
            ->orderBy('created_at','desc')
            ->get();

        return View::make('notifications.index')
            ->with('title', 'View All Notification')
            ->with('notify', $notify);
    }



    public static function manager()
    {
        $notify =Notification::where('flat_id','=',Auth::user()->flat_id)
            ->orWhere('type','=','announce')
            ->orWhere('type','=','user_request')
            ->orderBy('created_at','desc')
            ->get();

        return View::make('notifications.index')
            ->with('title', 'View All Notification')
            ->with('notify', $notify);
    }



    public static function user()
    {
        $notify =Notification::where('flat_id','=',Auth::user()->flat_id)
            ->orWhere('type','=','announce')
            ->orderBy('created_at','desc')
            ->get();

        return View::make('notifications.index')
            ->with('title', 'View All Notification')
            ->with('notify', $notify);
    }


}