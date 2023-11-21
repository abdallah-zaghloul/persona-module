<?php

namespace Modules\Persona\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Persona\Services\Web\UserSendResetPasswordService;
use Modules\Persona\Services\Web\UserShowForgotPasswordLinkFormService;

/**
 *
 */
class UserForgotPasswordController extends Controller
{

    /**
     * @param UserShowForgotPasswordLinkFormService $service
     * @return Renderable
     */
    public function showLinkRequestForm(UserShowForgotPasswordLinkFormService $service): Renderable
    {
        return $service->render();
    }


    /**
     * @param UserSendResetPasswordService $service
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function sendResetLinkEmail(UserSendResetPasswordService $service, Request $request): JsonResponse|RedirectResponse
    {
        return $service->render($request);
    }
}
