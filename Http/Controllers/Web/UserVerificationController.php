<?php

namespace Modules\Persona\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Persona\Services\Web\UserResendVerificationEmailService;
use Modules\Persona\Services\Web\UserShowEmailVerificationFormService;
use Modules\Persona\Services\Web\UserVerifyEmailService;

/**
 *
 */
class UserVerificationController extends Controller
{

    /**
     * @param UserShowEmailVerificationFormService $service
     * @param Request $request
     * @return Renderable
     */
    public function show(UserShowEmailVerificationFormService $service, Request $request): Renderable
    {
        return $service->render($request);
    }


    /**
     * @throws AuthorizationException
     */
    public function verify(UserVerifyEmailService $service, Request $request): JsonResponse|RedirectResponse
    {
        return $service->render($request);
    }


    /**
     * @param UserResendVerificationEmailService $service
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function resend(UserResendVerificationEmailService $service, Request $request): JsonResponse|RedirectResponse
    {
       return $service->render($request);
    }
}
