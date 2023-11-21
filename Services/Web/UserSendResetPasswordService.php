<?php

namespace Modules\Persona\Services\Web;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Persona\Services\Base\WebForgotPasswordService;

/**
 *
 */
class UserSendResetPasswordService
{
    use WebForgotPasswordService;

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function render(Request $request): JsonResponse|RedirectResponse
    {
        return $this->sendResetLinkEmail($request);
    }
}
