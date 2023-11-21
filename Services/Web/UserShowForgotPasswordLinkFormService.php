<?php

namespace Modules\Persona\Services\Web;

use Illuminate\Contracts\Support\Renderable;
use Modules\Persona\Services\Base\WebForgotPasswordService;

/**
 *
 */
class UserShowForgotPasswordLinkFormService
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
