<?php

class NotificationsController extends \BaseController {



    public static function admin()
    {
        $notify =Notification::where('type','=','manager_request')
            ->orWhere('type','=','admin')
            ->orderBy('created_at','desc')
            ->get();

        return View::make('notifications.index')
            ->with('title', 'View All Notification')
            ->with('notify', $notify);
    }



    public static function manager()
    {
        $notify =Notification::where('type','=','announce')
          //  ->OrWhere('flat_id','=',Auth::user()->flat_id)
            ->orWhere('type','=','user_request')
            ->orderBy('created_at','desc')
            ->get();

        return View::make('notifications.index')
            ->with('title', 'View All Notification')
            ->with('notify', $notify);
    }



    public static function user()
    {
        $notify =Notification::where('type','=','announce')
            //  ->OrWhere('flat_id','=',Auth::user()->flat_id)
            ->orderBy('created_at','desc')
            ->get();

        return View::make('notifications.index')
            ->with('title', 'View All Notification')
            ->with('notify', $notify);
    }






    //worker notification list
    public static function worker(){
        $type = Worker::where('worker_type','=',Auth::user()->workers->worker_type)->pluck('worker_type');
        $notify = Notification::where('type','=',$type)
            ->orderBy('created_at','desc')
            ->get();
        return View::make('notifications.index')
            ->with('title', 'View All Notification')
            ->with('notify', $notify);
    }


}