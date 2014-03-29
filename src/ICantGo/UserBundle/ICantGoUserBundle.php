<?php

namespace ICantGo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ICantGoUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
