<?php

namespace Modules\Persona\Services\Web;

use Illuminate\Contracts\Support\Renderable;
use Modules\Persona\Services\Base\WebRegistrationService;

/**
 *
 */
class UserShowRegistrationFormService
{
    use WebRegistrationService;

    /**
     * @return Renderable
     */
    public function render(): Renderable
    {
        return $this->showRegistrationForm();
    }
}
