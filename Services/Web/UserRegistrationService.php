<?php

namespace Modules\Persona\Services\Web;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Modules\Persona\Services\Base\WebRegistrationService;

/**
 *
 */
class UserRegistrationService
{
    use WebRegistrationService;

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse|Response
     * @throws ValidationException
     */
    public function render(Request $request): JsonResponse|RedirectResponse|Response
    {
        return $this->register($request);
    }
}
