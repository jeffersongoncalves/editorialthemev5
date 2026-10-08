<?php

namespace App\Filament\App\Pages\Auth;

use JeffersonGoncalves\Filament\User\Pages\Auth\Login as BaseLogin;

/**
 * filament-user's login (active-account check) with the Editorial Terminal login view.
 */
class Login extends BaseLogin
{
    protected string $view = 'filament-editorial-theme::auth.login';

    public function getHeading(): string
    {
        return '';
    }

    public function getSubheading(): ?string
    {
        return null;
    }

    public function hasLogo(): bool
    {
        return false;
    }
}
