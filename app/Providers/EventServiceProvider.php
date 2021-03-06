<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Articles
        'App\Events\Article\Create' => [
            'App\Listeners\Article\CreateListener',
        ],
        'App\Events\Article\Update' => [
            'App\Listeners\Article\UpdateListener',
        ],
        'App\Events\Article\Delete' => [
            'App\Listeners\Article\DeleteListener',
        ],
        'App\Events\Article\Publish' => [
            'App\Listeners\Article\PublishListener',
        ],
        // Authentication
        'App\Events\Auth\Login' => [
            'App\Listeners\Auth\LoginListener'
        ],
        'App\Events\Auth\Logout' => [
            'App\Listeners\Auth\LogoutListener'
        ]
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
