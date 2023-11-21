<?php

namespace Modules\Persona\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Modules\Persona\Services\Web\UserRegistrationService;
use Modules\Persona\Services\Web\UserShowRegistrationFormService;

/**
 *
 */
class UserRegisterController extends Controller
{

    /**
     * @param UserShowRegistrationFormService $service
     * @return Renderable
     */
    public function showRegistrationForm(UserShowRegistrationFormService $service): Renderable
    {
        return $service->render();
    }


    /**
     * @param UserRegistrationService $service
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     * @throws ValidationException
     */
    public function register(UserRegistrationService $service, Request $request): JsonResponse|RedirectResponse
    {
        return $service->render($request);
    }
}
