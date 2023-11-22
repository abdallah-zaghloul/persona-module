<?php

namespace Modules\Persona\Services\Web\User;

use Illuminate\Contracts\Support\Renderable;
use Modules\Persona\Services\Base\WebConfirmPasswordService;

/**
 *
 */
class ShowConfirmPasswordFormService
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
