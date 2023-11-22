<?php

namespace Modules\Persona\Services\Web\User;

use Illuminate\Contracts\Support\Renderable;
use Modules\Persona\Services\Base\WebRegistrationService;

/**
 *
 */
class ShowRegistrationFormService
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
