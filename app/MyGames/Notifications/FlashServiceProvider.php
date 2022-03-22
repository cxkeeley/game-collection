<?php namespace MyGames\Notifications;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider {

    /**
     * Create binding
     */
    public function register()
    {
        $this->app->bindShared('Flash', function()
        {
           return $this->app->make('MyGames\Notifications\FlashNotifier');
        });
    }

}