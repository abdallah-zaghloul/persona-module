<?php

namespace Modules\Persona\Services\Web\User;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Persona\Services\Base\WebAuthenticationService;

/**
 *
 */
class LogoutService
{
    use WebAuthenticationService;

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse|Response
     */
    public function render(Request $request): JsonResponse|RedirectResponse|Response
    {
        return $this->logout($request);
    }
}
