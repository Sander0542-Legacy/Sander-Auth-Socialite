<?php

namespace SocialiteProviders\SanderAuth;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SanderAuthExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('sander-auth', __NAMESPACE__.'\Provider');
    }
}
