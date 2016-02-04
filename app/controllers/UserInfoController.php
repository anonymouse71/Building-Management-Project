<?php
use Carbon\Carbon;
class UserInfoController extends \BaseController{


    public function getIndex()
    {
        return View::make('chart.test')->with('title','bvcjfj');
    }
    public function getApi()
    {
        $days = Input::get('days', 100);
        $range = \Carbon\Carbon::now()->subDays($days);

        $stats = User::where('created_at', '>=', $range)
            ->groupBy('role_id')
            ->orderBy('date', 'DESC')
            ->remember(60)
            ->get([
                DB::raw('role_id as date'),
                DB::raw('COUNT(*) as value')
            ])
            ->toJSON();

        return $stats;
    }


}
