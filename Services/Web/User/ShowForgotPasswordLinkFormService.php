<?php

namespace Modules\Persona\Services\Web\User;

use Illuminate\Contracts\Support\Renderable;
use Modules\Persona\Services\Base\WebForgotPasswordService;

/**
 *
 */
class ShowForgotPasswordLinkFormService
{
    use WebForgotPasswordService;

    /**
     * @return Renderable
     */
    public function render(): Renderable
    {
        return $this->showLinkRequestForm();
    }
}
