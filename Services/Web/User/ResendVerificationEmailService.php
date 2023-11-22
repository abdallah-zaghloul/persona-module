<?php

namespace Modules\Persona\Services\Web\User;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Persona\Services\Base\WebVerificationService;

/**
 *
 */
class ResendVerificationEmailService
{
    use WebVerificationService;

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function render(Request $request): JsonResponse|RedirectResponse
    {
        return $this->resend($request);
    }
}
