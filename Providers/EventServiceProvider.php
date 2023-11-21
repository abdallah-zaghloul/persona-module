<?php

namespace Modules\Persona\Providers;

use Modules\Persona\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Modules\Persona\Events\Registered;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [

    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        env('SHOULD_VERIFY_USER_EMAIL') and $this->listen[Registered::class][] = SendEmailVerificationNotification::class;
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
