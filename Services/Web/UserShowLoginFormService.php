<?php

namespace Modules\Persona\Services\Web;

use Illuminate\Contracts\Support\Renderable;
use Modules\Persona\Services\Base\WebAuthenticationService;

/**
 *
 */
class UserShowLoginFormService
{
    use WebAuthenticationService;

    /**
     * @return Renderable
     */
    public function render(): Renderable
    {
        return view('persona::user-login');
    }
}
