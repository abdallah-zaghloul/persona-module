<?php

namespace Modules\Persona\Services\Web\User;

use Illuminate\Contracts\Support\Renderable;
use Modules\Persona\Services\Base\WebAuthenticationService;

/**
 *
 */
class ShowLoginFormService
{
    use WebAuthenticationService;

    /**
     * @return Renderable
     */
    public function render(): Renderable
    {
        return view('persona::user.login');
    }
}
