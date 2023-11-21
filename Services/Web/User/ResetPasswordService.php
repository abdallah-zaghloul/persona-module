<?php

namespace Modules\Persona\Services\Web\User;

use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Persona\Services\Base\WebAuthenticationService;

/**
 *
 */
class ResetPasswordService
{
    use WebAuthenticationService;

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function render(Request $request): JsonResponse|RedirectResponse
    {
        return $this->reset($request);
    }

    protected function useVendorTrait(): string
    {
        return ResetsPasswords::class;
    }
}
