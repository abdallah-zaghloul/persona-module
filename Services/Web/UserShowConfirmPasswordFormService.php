<?php

namespace Modules\Persona\Services\Web;

use Illuminate\Contracts\Support\Renderable;
use Modules\Persona\Services\Base\WebConfirmPasswordService;

/**
 *
 */
class UserShowConfirmPasswordFormService
{
    use WebConfirmPasswordService;

    /**
     * @return Renderable
     */
    public function render(): Renderable
    {
        return $this->showConfirmForm();
    }
}
