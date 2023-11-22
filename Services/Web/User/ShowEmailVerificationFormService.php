<?php

namespace Modules\Persona\Services\Web\User;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Persona\Services\Base\WebVerificationService;

/**
 *
 */
class ShowEmailVerificationFormService
{
    use WebVerificationService;

    /**
     * @param Request $request
     * @return Renderable
     */
    public function render(Request $request): Renderable
    {
        return $this->show($request);
    }
}
