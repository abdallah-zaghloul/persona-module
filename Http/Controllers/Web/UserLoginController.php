<?php

namespace Modules\Persona\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Modules\Persona\Services\Web\UserLoginService;
use Modules\Persona\Services\Web\UserLogoutService;
use Modules\Persona\Services\Web\UserShowLoginFormService;

/**
 *
 */
class UserLoginController extends Controller
{

    /**
     * @param UserShowLoginFormService $service
     * @return Renderable
     */
    public function showLoginForm(UserShowLoginFormService $service): Renderable
    {
        return $service->render();
    }


    /**
     * @throws ValidationException
     */
    public function login(UserLoginService $service, Request $request): Response|JsonResponse|RedirectResponse
    {
        return $service->render($request);
    }


    /**
     * @param UserLogoutService $service
     * @param Request $request
     * @return Response|JsonResponse|RedirectResponse
     */
    public function logout(UserLogoutService $service, Request $request): Response|JsonResponse|RedirectResponse
    {
        return $service->render($request);
    }
}
