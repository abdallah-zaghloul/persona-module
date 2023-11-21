<?php

namespace Modules\Persona\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Persona\Services\Web\UserResetPasswordFormService;
use Modules\Persona\Services\Web\UserResetPasswordService;

/**
 *
 */
class UserResetPasswordController extends Controller
{

    /**
     * @param UserResetPasswordFormService $service
     * @param Request $request
     * @return Renderable
     */
    public function showResetForm(UserResetPasswordFormService $service, Request $request): Renderable
    {
        return $service->render($request);
    }


    /**
     * @param UserResetPasswordService $service
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function reset(UserResetPasswordService $service, Request $request): JsonResponse|RedirectResponse
    {
        return $service->render($request);
    }

}
