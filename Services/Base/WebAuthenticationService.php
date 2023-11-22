<?php

namespace Modules\Persona\Services\Base;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Modules\Persona\Providers\RouteServiceProvider;


/**
 *
 */
trait WebAuthenticationService
{
  /*
  |--------------------------------------------------------------------------
  | Authentication Service
  |--------------------------------------------------------------------------
  |
  | This service handles authenticating users for the application and
  | redirecting them to your home screen. The service uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected string $redirectTo = RouteServiceProvider::USER_HOME;
}
