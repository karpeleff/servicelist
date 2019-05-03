<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service\Service;
//use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $count = [];
        $count[0] = Service::where('status','=', 'work')->count();
        $count[1] = Service::where('status','=', 'new')->count();
        $count[2] = Service::where('status','=', 'done')->count();
        $count[3] = Service::where('status','=', 'out')->count();

        View::share('count', $count);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
