<?php

namespace Modules\Persona\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Persona\Services\Web\UserConfirmPasswordService;
use Modules\Persona\Services\Web\UserShowConfirmPasswordFormService;

/**
 *
 */
class UserConfirmPasswordController extends Controller
{

    /**
     * @param UserShowConfirmPasswordFormService $service
     * @return Renderable
     */
    public function showConfirmForm(UserShowConfirmPasswordFormService $service): Renderable
    {
        return $service->render();
    }

    /**
     * @param UserConfirmPasswordService $service
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function confirm(UserConfirmPasswordService $service, Request $request): JsonResponse|RedirectResponse
    {
        return $service->render($request);
    }
}
